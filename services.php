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
    <meta name="description" content="Découvrez toutes les prestations d'ALG Derma Lina à Ensuès-la-Redonne : Jet Peel, épilation laser, dermopigmentation, photobiomodulation LED, naturopathie et accompagnement à la parentalité.">
    <meta name="keywords" content="Jet Peel, épilation laser, dermopigmentation, photobiomodulation, naturopathie, parentalité">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="<?= htmlspecialchars($canonical, ENT_QUOTES); ?>">
    <meta property="og:title" content="Dermopigmentation, Épilation Laser & Soins Anti-Âge | ALG Derma Lina Ensuès">
    <meta property="og:description" content="Découvrez toutes les prestations d'ALG Derma Lina : Jet Peel, épilation laser, dermopigmentation, photobiomodulation LED, naturopathie et accompagnement à la parentalité.">
    <meta property="og:image" content="<?= htmlspecialchars($base_url . '/images/logo/ALG6.png', ENT_QUOTES); ?>">
    <meta property="og:url" content="<?= htmlspecialchars($canonical, ENT_QUOTES); ?>">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#8B9A7B">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

    <title>Dermopigmentation, Épilation Laser & Soins Anti-Âge | ALG Derma Lina Ensuès</title>
    <link rel="icon" type="image/png" href="./images/logo/ALG6.png">
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
        .service-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .services-intro {
            padding: 1rem;
            text-align: center;
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
<?php include "partials/header.php"; ?>

<section class="page-header">
    <h1>Nos Services</h1>
    <p>Une offre complète aux soins d'une experte de l'esthétique et d'accompagnements personnalisés pour votre bien-être.</p>
</section>

<section class="services-intro">
    <p>Caroline Vedda met son expertise et son approche holistique au service de votre beauté naturelle. Chaque prestation est réalisée dans le respect de votre peau et de vos besoins spécifiques.</p>
</section>

<section id="jet-peel" class="service-detail">
    <div class="service-content">
        <div class="service-image">
            <img src="images/jetpeel.png" alt="Jet Peel Ensuès-la-Redonne">
        </div>
        <div class="service-text">
            <h2>Jet Peel</h2>
            <p>Technique non invasive, avec un appareil anti-âge révolutionnaire qui combine pression énergétique pour nettoyer, exfolier et oxygéner la peau en profondeur. Cette technologie hybride permet de faire pénétrer des principes actifs dans les couches profondes de la peau pour une revitalisation naturelle.</p>
            <h3>Bienfaits</h3>
            <ul class="benefits-list">
                <li>Nettoyage intense et élimination des impuretés</li>
                <li>Hydratation profonde et peau repulpée</li>
                <li>Stimulation de la microcirculation cutanée</li>
            </ul>
        </div>
    </div>
</section>

<section id="laser" class="service-detail">
    <div class="service-content">
        <div class="service-image">
            <img src="images/epilation.png" alt="Épilation laser Ensuès-la-Redonne">
        </div>
        <div class="service-text">
            <h2>Épilation Laser</h2>
            <p>Procédé sûr et efficace pour une épilation définitive. Equipement de pointe utilisé. Garantit un traitement rapide et moins douloureux grâce à un système de refroidissement de contact intégré.</p>
            <h3>Bienfaits</h3>
            <ul class="benefits-list">
                <li>Réduction progressive et définitive de la pilosité</li>
                <li>Confort optimal, séances indolores</li>
                <li>Convient à tout types de peaux</li>
            </ul>
        </div>
    </div>
</section>

<section id="dermopigmentation" class="service-detail">
    <div class="service-content">
        <div class="service-image">
            <img src="images/cicatrice.png" alt="Dermopigmentation correctrice et réparatrice à Ensuès-la-Redonne">
        </div>
        <div class="service-text">
            <h2>Dermopigmentation correctrice/réparatrice</h2>
            <p>Elle a pour but de camoufler des cicatrices, des vergetures, des taches ou de reconstruire l'aréole mammaire après une chirurgie. Ayant l'expertise dans ma profession d'infirmière, je vous garantis une hygiène irréprochable dans mes soins et un haut niveau d'exigence qualitative.</p>
            <h3>Bienfaits</h3>
            <ul class="benefits-list">
                <li>Atténue cicatrices et imperfections</li>
                <li>Rééquilibre la pigmentation de la peau</li>
                <li>Améliore la confiance en soi</li>
            </ul>
        </div>
    </div>
</section>

<section id="maquillage-permanent" class="service-detail">
    <div class="service-content">
        <div class="service-image">
            <img src="images/dermopigmentation.png" alt="Maquillage permanent Ensuès-la-Redonne">
        </div>
        <div class="service-text">
            <h2>Maquillage permanent</h2>
            <p>Formée par Myriam Dugelay, dotée de ses décennies d'expérience et d'expertise. Technique esthétique qui redessine et sublime durablement les sourcils, yeux ou lèvres. Et ceci pour un résultat naturel, harmonieux et pratique au quotidien qui vous fera gagner du temps chaque jour. Ce sont des pigments organiques de haute technologie qui sont implantés dans les couches superficielles de la peau.</p>
            <h3>Bienfaits</h3>
            <ul class="benefits-list">
                <li>Résultat naturel et longue durée</li>
                <li>Sourcils et lèvres toujours nets</li>
                <li>Gain de temps chaque matin</li>
            </ul>
        </div>
    </div>
</section>

<section id="led" class="service-detail">
    <div class="service-content">
        <div class="service-image">
            <img src="images/photobiomodulationLED.png" alt="Photobiomodulation LED Ensuès-la-Redonne">
            <div class="coming-soon">Bientôt disponible</div>
        </div>
        <div class="service-text">
            <h2>Photobiomodulation LED</h2>
            <p>Technique innovante qui utilise une lumière émise par des LED. Totalement indolore et agit au coeur des cellules pour stimuler leur fonctionnement naturel.</p>
            <h3>Bienfaits</h3>
            <ul class="benefits-list">
                <li>La régénération et la réparation des tissus</li>
                <li>La réduction de l'inflammation</li>
                <li>Le soulagement de certaines douleurs</li>
                <li>L'amélioration de la circulation, de la fermeté et de la texture de la peau</li>
                <li>Améliore la cicatrisation et élimine les rougeurs</li>
            </ul>
        </div>
    </div>
</section>

<section id="naturopathie" class="service-detail">
    <div class="service-content">
        <div class="service-image">
            <img src="images/naturopathie.jpg" alt="Naturopathie Ensuès-la-Redonne">
        </div>
        <div class="service-text">
            <h2>Naturopathie</h2>
            <p>Approche globale visant à rééquilibrer l'organisme de manière naturelle. Bilan personnalisé, conseils nutritionnels et hygiène de vie pour optimiser votre santé au quotidien.</p>
            <h3>Bienfaits</h3>
            <ul class="benefits-list">
                <li>Compréhension globale de vos besoins</li>
                <li>Programme sur mesure et suivi personnalisé</li>
                <li>Solutions naturelles pour retrouver énergie et vitalité</li>
            </ul>
        </div>
    </div>
</section>

<section id="parentalite" class="service-detail">
    <div class="service-content">
        <div class="service-image">
            <img src="images/parentalite.jpg" alt="Accompagnement à la parentalité Ensuès-la-Redonne">
        </div>
        <div class="service-text">
            <h2>Accompagnement à la parentalité</h2>
            <p>Ateliers et consultations destinés à soutenir les parents dans toutes les étapes de la vie familiale. Un accompagnement bienveillant pour renforcer la relation parent-enfant.</p>
            <h3>Bienfaits</h3>
            <ul class="benefits-list">
                <li>Conseils pratiques pour une parentalité sereine</li>
                <li>Échanges et soutien au sein de groupes dédiés</li>
                <li>Approche positive favorisant l'épanouissement des enfants</li>
            </ul>
        </div>
    </div>
</section>

<section class="service-cta" style="text-align:center; padding:4rem 0;">
    <a href="https://www.planity.com/alg-dermalina-13820-ensues-la-redonne" class="btn-service">Prendre rendez-vous</a>
</section>

<?php include "partials/footer.php"; ?>
<script src="js/main.js"></script>
</body>
</html>
