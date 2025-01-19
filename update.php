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
?>

        <form method="post" action="blog.php">
        <input type="hidden" name="articleId" value="<?php echo $article->id; ?>">
        <input type="text" name="titre" value="<?php echo $article->titre; ?>" required><br>
        <textarea name="contenu" required><?php echo $article->contenu; ?></textarea><br>
        <input type="submit" value="Modifier" name="modifier_article">

<?php
    } else {
        echo "<p>Aucun article sélectionné</p>";
    }
?>

<?php include 'footer.php'; ?>