<?php include 'header.php'; ?>
<h1>Mini-Blog - Créer un nouvel article</h1>
    <form method="post" action="blog.php">
     <input type="text" name="titre" placeholder="Titre de l'article" required><br>
     <textarea name="contenu" placeholder="Contenu de l'article" required></textarea><br>
     <input type="submit" value="Publier" name="ajout_article">
     </form>
<?php include 'footer.php'; ?>