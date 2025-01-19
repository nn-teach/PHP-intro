<?php include 'header.php'; ?>
<h1>Mini-Blog</h1>
<form method="post" action="blog.php">
    <input type="text" name="titre" placeholder="Titre de l'article" required><br>
    <textarea name="contenu" placeholder="Contenu de l'article" required></textarea><br>
    <input type="submit" value="Publier">
</form>
<?php
// Simuler un stockage en tableau
$articles[] = ["titre" => "Mon Titre", "contenu" => "Mon contenu"];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titre = $_POST['titre'];
    $contenu = $_POST['contenu'];
    // Ajout de l'article au tableau
    $articles[] = ["titre" => $titre, "contenu" => $contenu];
}
echo "<h2>Articles publiés</h2>";
foreach ($articles as $article) {
    echo "<h3>" . htmlspecialchars($article['titre']) . "</h3>";
    echo "<p>" . nl2br(htmlspecialchars($article['contenu'])) . "</p>";
}
?>
<?php include 'footer.php'; ?>