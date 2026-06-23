<?php
session_start();

$pdo = new PDO(
    "mysql:host=localhost;dbname=socialbook;charset=utf8mb4",
    "root",
    ""
);

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
