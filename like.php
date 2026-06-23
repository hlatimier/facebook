<?php
require 'config.php';

$post = $_GET['id'];
$user = $_SESSION['user_id'];

$check = $pdo->prepare("
SELECT * FROM likes_publications
WHERE publication_id=? AND utilisateur_id=?
");

$check->execute([$post,$user]);

if($check->fetch()){
    $del = $pdo->prepare("
    DELETE FROM likes_publications
    WHERE publication_id=? AND utilisateur_id=?
    ");
    $del->execute([$post,$user]);
}else{
    $add = $pdo->prepare("
    INSERT INTO likes_publications(publication_id,utilisateur_id)
    VALUES(?,?)
    ");
    $add->execute([$post,$user]);
}

header("Location: index.php");
