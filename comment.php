<?php
require 'config.php';

$req = $pdo->prepare("
INSERT INTO commentaires(publication_id,utilisateur_id,contenu)
VALUES(?,?,?)
");

$req->execute([
    $_POST['id'],
    $_SESSION['user_id'],
    $_POST['contenu']
]);

header("Location: index.php");
