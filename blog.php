<?php
  session_start();
  if (!isset($_SESSION['articles'])) {
      $_SESSION['articles'] = array();
  }
  if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['titre']) && !empty($_POST['contenu'])) {
      $_SESSION['articles'][] = array("titre" => $_POST['titre'], "contenu" => $_POST['contenu']);
  }
?>
<?php include 'header.php'; ?>
 <h1>Mini-Blog</h1>
 <form method="post" action="blog.php">
     <input type="text" name="titre" placeholder="Titre de l'article" required><br>
     <textarea name="contenu" placeholder="Contenu de l'article" required></textarea><br>
     <input type="submit" value="Publier">
 </form>
 <?php
      if (!empty($_SESSION['articles'])) {
          foreach ($_SESSION['articles'] as $article) {
              echo "<h3>" . htmlspecialchars($article['titre']) . "</h3>";
              echo "<p>" . nl2br(htmlspecialchars($article['contenu'])) . "</p>";
          }
      }
 ?>
 <a href="clear.php">Effacer tous les articles</a>
<?php include 'footer.php'; ?>