<?php
require_once '../config.php';
session_start();
$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = $_POST['username'] ?? '';
    $pass = $_POST['password'] ?? '';
    if ($user === ADMIN_USER && hash('sha256', $pass) === ADMIN_HASH) {
        $_SESSION['admin_logged_in'] = true;
        header('Location: add_post.php');
        exit;
    } else {
        $error = 'Identifiants invalides';
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion Admin</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<div class="container section">
    <h1>Connexion Admin</h1>
    <?php if ($error): ?>
        <div class="alert alert-error"><?= htmlspecialchars($error) ?></div>
    <?php endif; ?>
    <form method="post">
        <div class="form-group">
            <label for="username">Utilisateur</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div class="form-group">
            <label for="password">Mot de passe</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit" class="cta-button">Se connecter</button>
    </form>
</div>
</body>
</html>
