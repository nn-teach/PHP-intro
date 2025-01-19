<?php include 'header.php'; ?>
<h1>À propos de nous</h1>
<?php
if (isset($_GET['name'])) {
    echo "<p>Bienvenue, " . htmlspecialchars($_GET['name']) . "! Voici plus d'informations sur notre site.</p>";
} else {
    echo "<p>Voici plus d'informations sur notre site.</p>";
}
?>
<?php include 'footer.php'; ?>