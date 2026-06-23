<?php
require 'config.php';

if(!isset($_SESSION['user_id'])){
    header("Location: login.php");
    exit;
}

$user_id = $_SESSION['user_id'];
?>

<h1>SocialBook</h1>

<a href="logout.php">Déconnexion</a>

<!-- POST -->
<form method="post" action="post.php">
<textarea name="contenu"></textarea>
<button>Publier</button>
</form>

<hr>

<?php
$posts = $pdo->query("
SELECT p.*, u.nom
FROM publications p
JOIN utilisateurs u ON u.id = p.utilisateur_id
ORDER BY p.id DESC
");

while($p = $posts->fetch()){
    
    // likes
    $like = $pdo->prepare("
        SELECT COUNT(*) FROM likes_publications
        WHERE publication_id=?
    ");
    $like->execute([$p['id']]);
    $nb = $like->fetchColumn();
?>

<div style="border:1px solid #ccc;margin:10px;padding:10px;">
    <b><?= $p['nom'] ?></b><br>
    <?= $p['contenu'] ?>

    <br><br>

    <a href="like.php?id=<?= $p['id'] ?>">
        👍 Like (<?= $nb ?>)
    </a>

    <form method="post" action="comment.php">
        <input name="contenu">
        <input type="hidden" name="id" value="<?= $p['id'] ?>">
        <button>Commenter</button>
    </form>

</div>

<?php } ?>
