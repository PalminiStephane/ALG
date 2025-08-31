<?php
require_once 'db.php';
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$stmt = $db->prepare('SELECT * FROM posts WHERE id = ?');
$stmt->execute([$id]);
$post = $stmt->fetch(PDO::FETCH_ASSOC);
if (!$post) { die('Article introuvable'); }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($post['title']); ?></title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
</head>
<body>
<?php include 'partials/header.php'; ?>
<section class="section">
    <div class="container">
        <h1><?php echo htmlspecialchars($post['title']); ?></h1>
        <p class="blog-date"><?php echo date('d/m/Y', strtotime($post['created_at'])); ?></p>
        <div><?php echo nl2br($post['content']); ?></div>
    </div>
</section>
<?php include 'partials/footer.php'; ?>
</body>
</html>
