<?php include 'header.php'; ?>
<h1>Mini-Blog</h1>
<?php
    // Simuler un stockage en tableau
    $articles[] = ["titre" => "Mon Titre", "contenu" => "Mon contenu"];

echo "<h2>Articles publiés</h2>";
foreach ($articles as $article) {
    echo "<article>";
    echo "<h3>" . htmlspecialchars($article['titre']) . "</h3>";
    echo "<p>" . nl2br(htmlspecialchars($article['contenu'])) . "</p>";
    echo "</article>";
}
?>
<?php include 'footer.php'; ?>