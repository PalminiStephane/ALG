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
    <meta name="theme-color" content="#8B9A7B">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

    <title><?php echo htmlspecialchars($post['title']); ?></title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Import des styles de base */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        :root {
            --primary-color: #8B9A7B;
            --secondary-color: #E8DDD4;
            --accent-color: #D4A574;
            --text-dark: #2C3E2C;
            --text-light: #FFFFFF;
            --bg-light: #FAF9F7;
            --shadow: 0 4px 20px rgba(0,0,0,0.1);
            --transition: all 0.3s ease;
        }
        
        body {
            font-family: 'Helvetica Neue', Arial, sans-serif;
            line-height: 1.6;
            color: var(--text-dark);
            background-color: var(--bg-light);
        }
        
        /* Header - identique aux autres pages */
        header {
            background-color: var(--text-light);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: var(--shadow);
            transition: var(--transition);
        }
        
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 5%;
            max-width: 1400px;
            margin: 0 auto;
        }
        
        .logo {
            display: flex;
            align-items: center;
            font-size: 1.3rem;
            font-weight: 300;
            letter-spacing: 3px;
            color: var(--primary-color);
            text-decoration: none;
        }
        
        .logo img {
            width: 100px;
            height: auto;
            max-width: none;
        }
        
        .nav-links {
            display: flex;
            list-style: none;
            gap: 2rem;
            align-items: center;
        }
        
        .nav-links a {
            text-decoration: none;
            color: var(--text-dark);
            font-weight: 300;
            transition: var(--transition);
            letter-spacing: 0.5px;
            position: relative;
        }
        
        .nav-links a:hover,
        .nav-links a.active {
            color: var(--primary-color);
        }
        
        .nav-links a.active::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 100%;
            height: 2px;
            background-color: var(--primary-color);
        }
        
        .cta-button {
            background-color: var(--primary-color);
            color: var(--text-light) !important;
            padding: 0.8rem 2rem;
            border-radius: 30px;
            transition: var(--transition);
        }
        
        .cta-button:hover {
            background-color: var(--accent-color) !important;
            transform: translateY(-2px);
            box-shadow: var(--shadow);
        }
        
        .mobile-menu-toggle {
            display: none;
            background: none;
            border: none;
            cursor: pointer;
            font-size: 1.5rem;
            color: var(--text-dark);
        }
        
        /* Breadcrumb */
        .breadcrumb {
            padding: 1rem 5%;
            background-color: var(--bg-light);
            margin-top: 80px;
        }
        
        .breadcrumb ul {
            list-style: none;
            display: flex;
            gap: 1rem;
            align-items: center;
            max-width: 1400px;
            margin: 0 auto;
        }
        
        .breadcrumb li {
            color: var(--text-dark);
            opacity: 0.7;
        }
        
        .breadcrumb li:after {
            content: '>';
            margin-left: 1rem;
            opacity: 0.5;
        }
        
        .breadcrumb li:last-child:after {
            display: none;
        }
        
        .breadcrumb a {
            color: var(--primary-color);
            text-decoration: none;
        }
        
        /* Page Header */
        .page-header {
            background: linear-gradient(135deg, var(--secondary-color), var(--bg-light));
            padding: 4rem 5% 3rem;
            text-align: center;
        }
        
        .page-header h1 {
            color: var(--primary-color);
            font-size: 3rem;
            font-weight: 200;
            margin-bottom: 1rem;
            letter-spacing: 2px;
        }
        
        .page-header p {
            font-size: 1.2rem;
            opacity: 0.8;
            max-width: 600px;
            margin: 0 auto;
        }
        
        /* Tarifs Section */
        .tarifs-section {
            padding: 5rem 5%;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .tarifs-intro {
            text-align: center;
            max-width: 800px;
            margin: 0 auto 4rem;
        }
        
        .tarifs-intro p {
            font-size: 1.1rem;
            color: var(--text-dark);
            opacity: 0.9;
            line-height: 1.8;
        }
        
        /* Pricing Cards */
        .pricing-category {
            margin-bottom: 5rem;
        }
        
        .pricing-category h2 {
            text-align: center;
            color: var(--primary-color);
            font-size: 2.2rem;
            font-weight: 300;
            margin-bottom: 3rem;
            position: relative;
            padding-bottom: 1rem;
        }
        
        .pricing-category h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 2px;
            background-color: var(--accent-color);
        }
        
        .pricing-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }
        
        .price-card {
            background-color: white;
            border-radius: 15px;
            padding: 2.5rem;
            box-shadow: 0 5px 20px rgba(0,0,0,0.05);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .price-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 3px;
            background: linear-gradient(90deg, var(--primary-color), var(--accent-color));
        }
        
        .price-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow);
        }
        
        .price-card h3 {
            color: var(--text-dark);
            font-size: 1.5rem;
            font-weight: 400;
            margin-bottom: 1rem;
        }
        
        .price-card .description {
            color: var(--text-dark);
            opacity: 0.8;
            margin-bottom: 1.5rem;
            line-height: 1.6;
        }
        
        .price {
            font-size: 2rem;
            color: var(--accent-color);
            font-weight: 300;
            margin-bottom: 0.5rem;
        }
        
        .price .currency {
            font-size: 1.2rem;
        }
        
        .price-info {
            font-size: 0.9rem;
            color: var(--text-dark);
            opacity: 0.7;
        }
        
        /* Tables de prix */
        .price-table {
            background-color: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0,0,0,0.05);
            margin-bottom: 3rem;
        }
        
        .price-table h3 {
            background-color: var(--primary-color);
            color: white;
            padding: 1.5rem;
            font-weight: 400;
            font-size: 1.3rem;
            text-align: center;
        }
        
        .price-table table {
            width: 100%;
            border-collapse: collapse;
        }
        
        .price-table tr {
            border-bottom: 1px solid rgba(0,0,0,0.05);
        }
        
        .price-table tr:last-child {
            border-bottom: none;
        }
        
        .price-table td {
            padding: 1.2rem 1.5rem;
        }
        
        .price-table td:last-child {
            text-align: right;
            color: var(--accent-color);
            font-weight: 500;
            white-space: nowrap;
        }
        
        /* Forfaits */
        .forfaits-section {
            background-color: var(--bg-light);
            padding: 5rem 5%;
        }
        
        .forfaits-section h2 {
            text-align: center;
            color: var(--primary-color);
            font-size: 2.5rem;
            font-weight: 200;
            margin-bottom: 3rem;
            letter-spacing: 2px;
        }
        
        .forfaits-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 3rem;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .forfait-card {
            background-color: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0,0,0,0.05);
            transition: all 0.3s ease;
            position: relative;
        }
        
        .forfait-card.popular {
            transform: scale(1.05);
            box-shadow: var(--shadow);
        }
        
        .forfait-card.popular::before {
            content: 'POPULAIRE';
            position: absolute;
            top: 20px;
            right: -30px;
            background-color: var(--accent-color);
            color: white;
            padding: 0.5rem 3rem;
            transform: rotate(45deg);
            font-size: 0.8rem;
            font-weight: 500;
            letter-spacing: 1px;
        }
        
        .forfait-header {
            background-color: var(--primary-color);
            color: white;
            padding: 2rem;
            text-align: center;
        }
        
        .forfait-header h3 {
            font-size: 1.8rem;
            font-weight: 300;
            margin-bottom: 0.5rem;
        }
        
        .forfait-price {
            font-size: 3rem;
            font-weight: 300;
        }
        
        .forfait-price .currency {
            font-size: 1.5rem;
        }
        
        .forfait-price .period {
            font-size: 1rem;
            opacity: 0.8;
        }
        
        .forfait-content {
            padding: 2rem;
        }
        
        .forfait-content ul {
            list-style: none;
            margin-bottom: 2rem;
        }
        
        .forfait-content li {
            padding: 0.8rem 0;
            border-bottom: 1px solid rgba(0,0,0,0.05);
            position: relative;
            padding-left: 2rem;
        }
        
        .forfait-content li:before {
            content: '✓';
            position: absolute;
            left: 0;
            color: var(--primary-color);
            font-weight: bold;
        }
        
        .forfait-btn {
            display: block;
            width: 100%;
            padding: 1rem;
            background-color: var(--primary-color);
            color: white;
            text-align: center;
            text-decoration: none;
            border-radius: 30px;
            transition: all 0.3s ease;
        }
        
        .forfait-btn:hover {
            background-color: var(--accent-color);
            transform: translateY(-2px);
        }
        
        /* Conditions */
        .conditions-section {
            padding: 5rem 5%;
            background-color: white;
        }
        
        .conditions-section h2 {
            text-align: center;
            color: var(--primary-color);
            font-size: 2.5rem;
            font-weight: 200;
            margin-bottom: 3rem;
            letter-spacing: 2px;
        }
        
        .conditions-content {
            max-width: 800px;
            margin: 0 auto;
        }
        
        .condition-item {
            margin-bottom: 2rem;
        }
        
        .condition-item h3 {
            color: var(--primary-color);
            margin-bottom: 1rem;
            font-weight: 400;
        }
        
        .condition-item p {
            color: var(--text-dark);
            opacity: 0.8;
            line-height: 1.8;
        }
        
        /* Footer */
        footer {
            background-color: var(--text-dark);
            color: var(--text-light);
            padding: 3rem 5% 1rem;
        }
        
        .footer-content {
            max-width: 1400px;
            margin: 0 auto;
        }
        
        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 3rem;
            margin-bottom: 2rem;
        }
        
        .footer-column h3 {
            color: var(--accent-color);
            margin-bottom: 1rem;
            font-size: 1.2rem;
            font-weight: 400;
        }
        
        .footer-column ul {
            list-style: none;
        }
        
        .footer-column ul li {
            margin-bottom: 0.5rem;
        }
        
        .footer-column a {
            color: var(--text-light);
            text-decoration: none;
            opacity: 0.8;
            transition: var(--transition);
        }
        
        .footer-column a:hover {
            opacity: 1;
            color: var(--accent-color);
        }
        
        .social-links {
            display: flex;
            gap: 1rem;
            font-size: 1.5rem;
        }
        
        .footer-bottom {
            border-top: 1px solid rgba(255,255,255,0.1);
            padding-top: 2rem;
            text-align: center;
            opacity: 0.7;
            font-size: 0.9rem;
        }
        
        /* Responsive */
        @media (max-width: 865px) {
            .nav-links {
                display: none;
                position: absolute;
                top: 100%;
                left: 0;
                width: 100%;
                background-color: var(--text-light);
                flex-direction: column;
                padding: 2rem;
                box-shadow: var(--shadow);
            }
            
            .nav-links.active {
                display: flex;
            }
            
            .mobile-menu-toggle {
                display: block;
            }
            
            .page-header h1 {
                font-size: 2rem;
            }
            
            .pricing-grid,
            .forfaits-grid {
                grid-template-columns: 1fr;
            }
            
            .forfait-card.popular {
                transform: scale(1);
            }
            
            .price {
                font-size: 1.5rem;
            }
        }
    </style>
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
