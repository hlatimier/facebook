<?php
require 'config.php';

if($_POST){

    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $mdp = password_hash($_POST['mot_de_passe'], PASSWORD_DEFAULT);

    $req = $pdo->prepare("
        INSERT INTO utilisateurs(nom,email,mot_de_passe)
        VALUES(?,?,?)
    ");

    $req->execute([$nom,$email,$mdp]);

    header("Location: login.php");
}
?>

<form method="post">
<h2>Inscription</h2>
<input name="nom" placeholder="Nom"><br>
<input name="email" placeholder="Email"><br>
<input name="mot_de_passe" type="password" placeholder="Mot de passe"><br>
<button>S'inscrire</button>
</form>
