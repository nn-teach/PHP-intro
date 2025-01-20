<?php include 'admin_data.php'; ?>
<?php include 'header.php'; ?>
<h1>Mini-Blog</h1>

<a href="create.php">Créer un nouvel article</a>

<?php
echo "<h2>Articles publiés</h2>";
foreach ($articles as $article) {
    echo "<article>";
    echo "<h3><a href=read.php?articleId=". $article->id. ">" . htmlspecialchars($article->titre) . "</a></h3>";
    echo "<p>" . nl2br(htmlspecialchars($article->contenu)) . "</p>";
    echo "<div>";
    echo "<a href=update.php?articleId=". $article->id.">modifier</a>";
    echo    '<form method="post" action="blog.php">
            <input type="hidden" name="articleId" value="'.$article->id.'">
            <input type="submit" value="Supprimer" name="supprimer_article">';
    echo "</div>";
    echo "</article>";
}
?>
<?php include 'footer.php'; ?>