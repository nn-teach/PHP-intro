<?php
//une variable PHP de type tableau pour stocker les articles que l'on va récupérer dans la BDD
$articles = [];

//Base de données
try {
    // Connextion à la base de données SQLite
    $pdo = new \PDO('sqlite:' . realpath("./database.sqlite"));

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