<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($title) ? $title : 'ALG Derma Lina' ?></title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
<?php include __DIR__ . '/../partials/header.php'; ?>
<?= $content ?>
<?php include __DIR__ . '/../partials/footer.php'; ?>
</body>
</html>
