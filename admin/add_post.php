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
    $imagePath = '';

    if (!empty($_FILES['image']['name'])) {
        $uploadDir = '../images/blog/';
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }
        $filename = time() . '_' . preg_replace('/[^a-zA-Z0-9._-]/', '_', $_FILES['image']['name']);
        $target = $uploadDir . $filename;
        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            $imagePath = 'images/blog/' . $filename;
        }
    }
    if ($title && $content) {
        $stmt = $db->prepare("INSERT INTO posts (title, content, image) VALUES (?, ?, ?)");
        $stmt->execute([$title, $content, $imagePath]);
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
    <link rel="icon" type="image/png" href="../images/logo/ALG3.png">
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
        <form method="post" enctype="multipart/form-data">
            <label for="title">Titre</label>
            <input type="text" id="title" name="title" required>
        </div>
        <div class="form-group">
            <label for="content">Contenu</label>
            <textarea id="content" name="content" rows="10" required></textarea>
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" id="image" name="image" accept="image/*">
        </div>
        <button type="submit" class="submit-button">Publier</button>
    </form>
</div>
<?php include '../partials/footer.php'; ?>
</body>
</html>
