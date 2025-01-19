<?php include 'admin_data.php'; ?>
<?php include 'header.php'; ?>
<h1>Mini-Blog</h1>

<a href="create.php">Créer un nouvel article</a>

<?php
echo "<h2>Articles publiés</h2>";
foreach ($articles as $article) {
    echo "<article>";
    echo "<h3>" . htmlspecialchars($article->titre) . "</h3>";
    echo "<p>" . nl2br(htmlspecialchars($article->contenu)) . "</p>";
    echo "</article>";
}
?>
<?php include 'footer.php'; ?>