<?php
require_once 'db.php';
$posts = $db->query("SELECT * FROM posts ORDER BY created_at DESC")->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - ALG Derma Lina</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
</head>
<body>
<?php include 'partials/header.php'; ?>
<section class="section">
    <div class="container">
        <?php foreach($posts as $post): ?>
            <article class="blog-card mb-2">
                <div class="blog-content">
                    <span class="blog-date"><?php echo date('d/m/Y', strtotime($post['created_at'])); ?></span>
                    <h3 class="blog-title"><?php echo htmlspecialchars($post['title']); ?></h3>
                    <p class="blog-excerpt"><?php echo nl2br(substr($post['content'],0,200)); ?>...</p>
                    <a href="post.php?id=<?php echo $post['id']; ?>" class="blog-link">Lire la suite →</a>
                </div>
            </article>
        <?php endforeach; ?>
    </div>
</section>
<?php include 'partials/footer.php'; ?>
</body>
</html>
