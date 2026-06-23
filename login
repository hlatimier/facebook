<?php
require 'config.php';

if($_POST){

    $email = $_POST['email'];
    $mdp = $_POST['mot_de_passe'];

    $req = $pdo->prepare("SELECT * FROM utilisateurs WHERE email=?");
    $req->execute([$email]);
    $user = $req->fetch();

    if($user && password_verify($mdp,$user['mot_de_passe'])){
        $_SESSION['user_id'] = $user['id'];
        header("Location: index.php");
    }else{
        echo "Erreur login";
    }
}
?>

<form method="post">
<h2>Connexion</h2>
<input name="email">
<input name="mot_de_passe" type="password">
<button>Connexion</button>
</form>
