<?php include 'admin_data.php'; ?>
<?php include 'header.php'; ?>
<h1>Mini-Blog</h1>
<?php
    if (isset($_GET['articleId'])) {

        $query = $pdo->prepare('SELECT * FROM articles WHERE id =' . $_GET['articleId']);
        $query->execute();
        $article = $query->fetch(PDO::FETCH_OBJ);

        echo '<h2>'.$article->titre.'</h2>';
        echo "<p>" . nl2br(htmlspecialchars($article->contenu)) . "</p>";

    } else {
        echo "<p>Aucun article sélectionné</p>";
    }
?>


<?php include 'footer.php'; ?>