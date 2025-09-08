<?php
$host = 'localhost';
$dbname = 'alg';
$user = 'alg';
$pass = 'alg';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

$db = new PDO($dsn, $user, $pass, $options);
$db->exec("CREATE TABLE IF NOT EXISTS posts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    image VARCHAR(255) DEFAULT NULL,
    created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4");

// Ensure image column exists for older installations
try {
    $db->query("SELECT image FROM posts LIMIT 1");
} catch (PDOException $e) {
    $db->exec("ALTER TABLE posts ADD COLUMN image VARCHAR(255) DEFAULT NULL AFTER content");
}
?>
