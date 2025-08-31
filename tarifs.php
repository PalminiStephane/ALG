<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Tarifs des soins technico-esthétiques ALG Derma Lina à Ensuès-la-Redonne. Consultez nos prix et forfaits avantageux.">
    <title>Tarifs - ALG Derma Lina</title>
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
        
        #booking .cta-button {
            display: block;
            width: fit-content;
            margin: 0 auto;
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

        .launch-offers {
            background-color: var(--secondary-color);
            padding: 2rem;
            border-radius: 10px;
            text-align: center;
            margin: 3rem 0;
            box-shadow: var(--shadow);
        }

        .launch-offers h2 {
            color: var(--primary-color);
            font-weight: 300;
            margin-bottom: 1rem;
        }

        .launch-offers ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .launch-offers li {
            margin: 0.5rem 0;
        }

        .launch-offers .highlight {
            color: var(--accent-color);
            font-weight: 600;
        }

        .launch-offers .validity {
            margin-top: 1rem;
            font-style: italic;
            opacity: 0.8;
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

            .price-table td:last-child {
                white-space: normal;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
<?php include "partials/header.php"; ?>

    <!-- Breadcrumb -->
    <div class="breadcrumb">
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li>Tarifs</li>
        </ul>
    </div>

    <!-- Page Header -->
    <section class="page-header">
        <h1>Nos Tarifs</h1>
        <p>Des soins d'exception à des prix justes et transparents</p>
    </section>

    <!-- Tarifs Section -->
    <section class="tarifs-section">
        <div class="container">
        <div class="tarifs-intro">
            <p>Chez ALG Derma Lina, nous pratiquons des tarifs transparents et adaptés à la qualité de nos soins. Découvrez nos différentes prestations et forfaits avantageux.</p>
        </div>

        <div class="launch-offers">
            <h2>Offres de lancement</h2>
            <ul>
                <li><span class="highlight">JetPeel visage + cou</span> : 90€ au lieu de 150€</li>
                <li>Pour deux zones réservées : <span class="highlight">-20%</span> sur toutes les séances</li>
                <li>Pour trois zones réservées : <span class="highlight">-30%</span> sur toutes les séances</li>
            </ul>
            <p class="validity">Offre valable du 1<sup>er</sup> au 30 septembre pour un bilan réservé pendant cette période.</p>
            <div class="booking-container">
                <a href="tel:+33635565862" class="cta-button">Réserver maintenant</a>
            </div>
        </div>
<?php /*
            <!-- Soins du Visage -->
            <div class="pricing-category">
                <h2>Soins du Visage</h2>
                
                <div class="pricing-grid">
                    <div class="price-card">
                        <h3>Jet Peel</h3>
                        <p class="description">Soin complet de nettoyage et hydratation en profondeur. Résultats immédiats pour une peau éclatante.</p>
                        <div class="price">
                            <span class="currency">€</span>80
                        </div>
                        <p class="price-info">La séance de 45 minutes</p>
                    </div>
                    
                    <div class="price-card">
                        <h3>Photobiomodulation LED</h3>
                        <p class="description">Thérapie par la lumière pour régénérer et apaiser la peau. Idéal pour l'anti-âge et l'acné.</p>
                        <div class="price">
                            <span class="currency">€</span>60
                        </div>
                        <p class="price-info">La séance de 30 minutes</p>
                    </div>
                    
                    <div class="price-card">
                        <h3>Soin Combiné</h3>
                        <p class="description">Jet Peel + LED pour un traitement complet et des résultats optimaux.</p>
                        <div class="price">
                            <span class="currency">€</span>120
                        </div>
                        <p class="price-info">La séance d'1h15</p>
                    </div>
                </div>
            </div>

            <!-- Épilation Laser -->
            <div class="pricing-category">
                <h2>Épilation Laser Médical</h2>
                
                <div class="price-table">
                    <h3>Femmes</h3>
                    <table>
                        <tr>
                            <td>Lèvre supérieure</td>
                            <td>40€</td>
                        </tr>
                        <tr>
                            <td>Menton</td>
                            <td>40€</td>
                        </tr>
                        <tr>
                            <td>Aisselles</td>
                            <td>60€</td>
                        </tr>
                        <tr>
                            <td>Maillot classique</td>
                            <td>70€</td>
                        </tr>
                        <tr>
                            <td>Maillot intégral</td>
                            <td>120€</td>
                        </tr>
                        <tr>
                            <td>Demi-jambes</td>
                            <td>150€</td>
                        </tr>
                        <tr>
                            <td>Jambes complètes</td>
                            <td>250€</td>
                        </tr>
                    </table>
                </div>
                
                <div class="price-table">
                    <h3>Hommes</h3>
                    <table>
                        <tr>
                            <td>Barbe</td>
                            <td>80€</td>
                        </tr>
                        <tr>
                            <td>Épaules</td>
                            <td>100€</td>
                        </tr>
                        <tr>
                            <td>Torse</td>
                            <td>150€</td>
                        </tr>
                        <tr>
                            <td>Dos complet</td>
                            <td>200€</td>
                        </tr>
                    </table>
                </div>
            </div>

            <!-- Dermopigmentation -->
            <div class="pricing-category">
                <h2>Dermopigmentation</h2>
                
                <div class="pricing-grid">
                    <div class="price-card">
                        <h3>Sourcils</h3>
                        <p class="description">Technique microblading ou poudré pour des sourcils parfaits et naturels.</p>
                        <div class="price">
                            <span class="currency">€</span>350
                        </div>
                        <p class="price-info">Retouche incluse</p>
                    </div>
                    
                    <div class="price-card">
                        <h3>Lèvres</h3>
                        <p class="description">Contour et/ou remplissage pour des lèvres définies et colorées.</p>
                        <div class="price">
                            <span class="currency">€</span>400
                        </div>
                        <p class="price-info">Retouche incluse</p>
                    </div>
                    
                    <div class="price-card">
                        <h3>Eye-liner</h3>
                        <p class="description">Trait d'eye-liner permanent pour un regard intense au quotidien.</p>
                        <div class="price">
                            <span class="currency">€</span>250
                        </div>
                        <p class="price-info">Haut ou bas</p>
                    </div>
                </div>
                
                <div class="price-table" style="margin-top: 2rem;">
                    <h3>Dermopigmentation Médicale</h3>
                    <table>
                        <tr>
                            <td>Reconstruction aréole mammaire</td>
                            <td>Sur devis</td>
                        </tr>
                        <tr>
                            <td>Camouflage cicatrices</td>
                            <td>À partir de 200€</td>
                        </tr>
                        <tr>
                            <td>Densification capillaire</td>
                            <td>Sur devis</td>
                        </tr>
                    </table>
                </div>
            </div>

            <!-- Autres Services -->
            <div class="pricing-category">
                <h2>Accompagnements Spécialisés</h2>
                
                <div class="pricing-grid">
                    <div class="price-card">
                        <h3>Consultation Naturopathie</h3>
                        <p class="description">Bilan complet, conseils personnalisés et programme sur mesure.</p>
                        <div class="price">
                            <span class="currency">€</span>90
                        </div>
                        <p class="price-info">Consultation 1h30</p>
                    </div>
                    
                    <div class="price-card">
                        <h3>Suivi Naturopathie</h3>
                        <p class="description">Consultation de suivi pour ajuster votre programme.</p>
                        <div class="price">
                            <span class="currency">€</span>60
                        </div>
                        <p class="price-info">Consultation 45 min</p>
                    </div>
                    
                    <div class="price-card">
                        <h3>Atelier Parentalité</h3>
                        <p class="description">Ateliers thématiques en groupe de 6 parents maximum.</p>
                        <div class="price">
                            <span class="currency">€</span>45
                        </div>
                        <p class="price-info">Atelier de 2h</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Forfaits Section -->
    <section class="forfaits-section">
        <div class="container">
            <h2>Nos Forfaits Avantageux</h2>
            
            <div class="forfaits-grid">
                <div class="forfait-card">
                    <div class="forfait-header">
                        <h3>Forfait Éclat</h3>
                        <div class="forfait-price">
                            <span class="currency">€</span>350
                        </div>
                    </div>
                    <div class="forfait-content">
                        <ul>
                            <li>5 séances Jet Peel</li>
                            <li>Économie de 50€</li>
                            <li>Validité 6 mois</li>
                            <li>Produits de soin offerts</li>
                        </ul>
                        <a href="contact.php#booking" class="forfait-btn">Choisir ce forfait</a>
                    </div>
                </div>
                
                <div class="forfait-card popular">
                    <div class="forfait-header">
                        <h3>Forfait Premium</h3>
                        <div class="forfait-price">
                            <span class="currency">€</span>550
                        </div>
                    </div>
                    <div class="forfait-content">
                        <ul>
                            <li>5 séances combinées (Jet Peel + LED)</li>
                            <li>Économie de 100€</li>
                            <li>Validité 8 mois</li>
                            <li>Diagnostic peau offert</li>
                            <li>10% sur les produits</li>
                        </ul>
                        <a href="contact.php#booking" class="forfait-btn">Choisir ce forfait</a>
                    </div>
                </div>
                
                <div class="forfait-card">
                    <div class="forfait-header">
                        <h3>Forfait Laser</h3>
                        <div class="forfait-price">
                            <span class="currency">€</span>Sur mesure
                        </div>
                    </div>
                    <div class="forfait-content">
                        <ul>
                            <li>Package 6 séances</li>
                            <li>Réduction de 20%</li>
                            <li>Zones multiples possibles</li>
                            <li>Paiement en 3 fois</li>
                        </ul>
                        <a href="contact.php#booking" class="forfait-btn">Demander un devis</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Conditions Section -->
    <section class="conditions-section">
        <div class="container">
            <h2>Conditions et Modalités</h2>
            
        <div class="conditions-content">
            <div class="condition-item">
                <h3>Offres spéciales</h3>
                <p>-10% pour les étudiants et demandeurs d'emploi sur présentation d'un justificatif. Parrainage : 10% de réduction pour vous et votre filleul(e) sur le prochain soin.</p>
            </div>
        </div>
    </div>
</section>
*/ ?>

        <div class="pricing-category">
            <h2>Soins du Visage</h2>

            <div class="pricing-grid">
                <div class="price-card">
                    <h3>Consultation personnalisée</h3>
                    <p class="description">pour répondre à vos questions, sélectionner vos besoins et mettre en place les protocoles adaptés</p>
                    <div class="price"><span class="currency"></span>OFFERTE !</div>
                    <p class="price-info">30 min </p>
                </div>
            </div>

            <div class="price-table">
                <h3>Jet Peel – Tarifs par zone</h3>
                <table>
                    <tr><td>Visage + cou (45 à 60 min)</td><td>150€</td><td>Cure de 6 séances : 750€</td></tr>
                    <tr><td>Décolleté (40 min)</td><td>100€</td><td>Cure de 6 séances : 500€</td></tr>
                    <tr><td>Mains (40 min)</td><td>100€</td><td>Cure de 6 séances : 500€</td></tr>
                    <tr><td>Cuir chevelu (45 min)</td><td>150€</td><td>Cure de 6 séances : 750€</td></tr>
                    <tr><td>Lèvre supérieure + menton (30 min)</td><td>75€</td><td>Cure de 6 séances : 375€</td></tr>
                </table>
            </div>
        </div>

        <div class="pricing-category">
            <h2>Pulse Laser TRIO</h2>

            <div class="tarifs-intro">
                <p>Consultation personnalisée avant les séances, permettant d’identifier d’éventuelles contre indications, répondre aux questions, donner des conseils pré et post séances, établir un devis et signer les consentements.</p>
                <p>Lors de cette consultation ne pas épiler / raser la zone pour que je puisse analyser le poil et faire un essai. Cette consultation est sans engagement.</p>
            </div>

            <div class="price-table">
                <h3>Épilation Femme corps</h3>
                <table>
                    <tr><td>Aisselles</td><td>45€</td></tr>
                    <tr><td>Avant bras</td><td>90€</td></tr>
                    <tr><td>Bras entier</td><td>130€</td></tr>
                    <tr><td>Demi jambes</td><td>140€</td></tr>
                    <tr><td>Cuisses</td><td>140€</td></tr>
                    <tr><td>Jambes entières</td><td>260€</td></tr>
                    <tr><td>Maillot classique</td><td>50€</td></tr>
                    <tr><td>Maillot échancré</td><td>80€</td></tr>
                    <tr><td>Maillot intégral (+SIF offert)</td><td>120€</td></tr>
                    <tr><td>SIF</td><td>40€</td></tr>
                    <tr><td>Orteils</td><td>30€</td></tr>
                </table>
            </div>

            <div class="price-table">
                <h3>Épilation Homme</h3>
                <table>
                    <tr><td>Dos</td><td>190€</td></tr>
                    <tr><td>Torse</td><td>120€</td></tr>
                    <tr><td>Ventre</td><td>120€</td></tr>
                    <tr><td>Torse + ventre</td><td>210€</td></tr>
                    <tr><td>Ligne ombilicale</td><td>30€</td></tr>
                </table>
            </div>

            <div class="price-table">
                <h3>Forfaits</h3>
                <table>
                    <tr><td>Maillot brésilien + aisselles</td><td>110€</td></tr>
                    <tr><td>Maillot intégral + aisselles</td><td>140€</td></tr>
                    <tr><td>Demi jambes + Maillot brésilien</td><td>190€</td></tr>
                    <tr><td>Maillot + aisselles + demi jambes</td><td>220€</td></tr>
                    <tr><td>Maillot + jambe entière</td><td>280€</td></tr>
                    <tr><td>Maillot + aisselles + jambe entière</td><td>330€</td></tr>
                    <tr><td>Aisselles + jambe entière</td><td>280€</td></tr>
                </table>
            </div>
        </div>
    </div>
</section>

<section id="booking">
    <div class="booking-container">
        <a href="tel:+33635565862" class="cta-button">Réserver votre consultation</a>
    </div>
</section>

<?php include "partials/footer.php"; ?>
</body>
</html>
