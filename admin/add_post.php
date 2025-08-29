<?php
require_once '../db.php';
require_once '../config.php';
session_start();
if (empty($_SESSION['admin_logged_in'])) {
    header('Location: login.php');
    exit;
}
$message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = trim($_POST['title']);
    $content = trim($_POST['content']);
    if ($title && $content) {
        // created_at is automatically set by the DB to the current timestamp
        // so we simply omit it from the INSERT statement
        $stmt = $db->prepare("INSERT INTO posts (title, content) VALUES (?, ?)");
        $stmt->execute([$title, $content]);
        $message = 'Article ajouté';
    } else {
        $message = 'Titre et contenu requis';
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un article</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
<?php include '../partials/header.php'; ?>
<div class="container section">
    <h1>Nouvel Article</h1>
    <?php if ($message): ?>
        <p><?= htmlspecialchars($message) ?></p>
    <?php endif; ?>
    <form method="post">
        <div class="form-group">
            <label for="title">Titre</label>
            <input type="text" id="title" name="title" required>
        </div>
        <div class="form-group">
            <label for="content">Contenu</label>
            <textarea id="content" name="content" rows="10" required></textarea>
        </div>
        <button type="submit" class="submit-button">Publier</button>
    </form>
</div>
<?php include '../partials/footer.php'; ?>
</body>
</html>
