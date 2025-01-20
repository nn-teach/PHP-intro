<?php
    //une variable PHP de type tableau pour stocker les articles que l'on va récupérer dans la BDD
    $articles = [];

    //Base de données
    try {

    // Connextion à la base de données SQLite
    $pdo = new \PDO('sqlite:' . realpath("./database.sqlite"));

    //Si le formulaire HTML d'ajout d'article a été rempli
    if (isset($_POST['ajout_article'])) {
        $query = $pdo->prepare('INSERT INTO articles ("titre", "contenu") VALUES (?,?)'); //préparation d'une requête SQL d'insertion d'un article
        $query->execute([$_POST['titre'], $_POST['contenu']]); //execution de la requête en injectant les valeurs à la place des ? ci-dessus
    }

    //Si le formulaire HTML d'edition d'article a été rempli
    if (isset($_POST['modifier_article'])) {
        //préparation d'une requête SQL d'update d'un article
        $query = $pdo->prepare('UPDATE articles SET titre = ?, contenu = ? WHERE id = ?');
        $query->execute([$_POST['titre'], $_POST['contenu'], $_POST['articleId']]); //execution de la requête en injectant les valeurs à la place des ? ci-dessus
    }

    //Si le formulaire HTML de suppression d'article a été rempli
    if (isset($_POST['supprimer_article'])) {
        //préparation d'une requête SQL de suppression d'un article
        $query = $pdo->prepare('DELETE FROM articles WHERE id = ?');
        $query->execute([$_POST['articleId']]); //execution de la requête en injectant les valeurs à la place des ? ci-dessus
    }
    //Récupération des données de la table articles
    $query = $pdo->prepare('SELECT * FROM articles');
    $query->execute();
    $articles = $query->fetchAll(PDO::FETCH_CLASS);
    //echo "<pre>".print_r($articles,true)."</pre>";die; //décommenter pour voir le condtenu du tableau articles

    } catch (Exception $e) { //le bloc try / catch permet de capturer les erreurs
    print "Erreur base de données : " . $e->getMessage() . "<br/>";
    die();
    }
?>