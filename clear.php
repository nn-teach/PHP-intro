<?php
session_start();
unset($_SESSION['articles']); // Efface les articles
header('Location: blog.php'); // Redirige vers la page principale du blog