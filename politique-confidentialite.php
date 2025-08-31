<?php
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$base_url = $protocol . '://' . $_SERVER['HTTP_HOST'];
$canonical = $base_url . $_SERVER['REQUEST_URI'];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Politique de confidentialité d'ALG Derma Lina concernant la gestion des données personnelles.">
    <meta name="keywords" content="politique de confidentialité, données personnelles, ALG Derma Lina">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="<?= htmlspecialchars($canonical, ENT_QUOTES); ?>">
    <meta property="og:title" content="Politique de confidentialité - ALG Derma Lina">
    <meta property="og:description" content="Politique de confidentialité d'ALG Derma Lina concernant la gestion des données personnelles.">
    <meta property="og:image" content="<?= htmlspecialchars($base_url . '/images/logo/ALG6.png', ENT_QUOTES); ?>">
    <meta property="og:url" content="<?= htmlspecialchars($canonical, ENT_QUOTES); ?>">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#8B9A7B">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

    <title>Politique de confidentialité - ALG Derma Lina</title>
    <link rel="icon" type="image/png" href="./images/logo/ALG6.png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
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
            
            .hero h1 {
                font-size: 2.5rem;
            }
            
            .hero p {
                font-size: 1.1rem;
            }
            
            .hero-buttons {
                flex-direction: column;
                align-items: center;
            }
            
            .services-grid {
                grid-template-columns: 1fr;
            }
            
            .footer-grid {
                grid-template-columns: 1fr;
                text-align: center;
            }
            
            .social-links {
                justify-content: center;
            }
        }
    </style>
</head>
<body>
<?php include 'partials/header.php'; ?>
<section class="page-header">
    <h1>Politique de confidentialité</h1>
    <p>Gestion de vos données personnelles</p>
</section>
<section class="section">
    <div class="container">
        <h2>Responsable du traitement</h2>
        <p>ALG Derma Lina - Caroline Vedda<br>Ensuès-la-Redonne, France</p>

        <h2>Données collectées</h2>
        <p>Les données collectées via les formulaires de contact et de prise de rendez-vous comprennent vos nom, prénom, coordonnées et toute information nécessaire à votre demande.</p>

        <h2>Finalité de la collecte</h2>
        <p>Ces informations sont utilisées uniquement pour répondre à vos demandes, planifier les rendez-vous et assurer le suivi des prestations.</p>

        <h2>Conservation des données</h2>
        <p>Les données sont conservées pendant une durée maximale de 3 ans à compter du dernier contact, sauf obligation légale contraire.</p>

        <h2>Partage des données</h2>
        <p>Les données ne sont en aucun cas vendues ni communiquées à des tiers sans votre consentement, sauf obligation légale.</p>

        <h2>Cookies</h2>
        <p>Des cookies peuvent être utilisés pour améliorer votre expérience de navigation. Vous pouvez configurer votre navigateur pour les refuser.</p>

        <h2>Sécurité</h2>
        <p>Nous mettons en œuvre des mesures de sécurité appropriées pour protéger vos données contre l'accès, la modification ou la destruction non autorisés.</p>

        <h2>Vos droits</h2>
        <p>Conformément à la réglementation, vous disposez d'un droit d'accès, de rectification, d'opposition et de suppression de vos données. Pour exercer ces droits, contactez-nous.</p>
    </div>
</section>
<?php include 'partials/footer.php'; ?>
</body>
</html>
