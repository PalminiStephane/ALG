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
    <meta name="description" content="ALG Derma Lina - Soins technico-esthétiques médicaux à Ensuès-la-Redonne. Jet Peel, épilation laser, dermopigmentation et accompagnement naturopathique par Caroline Vedda.">
    <meta name="keywords" content="soins esthétiques médicaux, jet peel, épilation laser, dermopigmentation, naturopathie, Marseille, Ensuès-la-Redonne, Martigues, Bouches-du-Rhône">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="<?= htmlspecialchars($canonical, ENT_QUOTES); ?>">
    <meta property="og:title" content="ALG Derma Lina | Dermopigmentation & Soins Esthétiques Médicaux à Ensuès-la-Redonne">
    <meta property="og:description" content="ALG Derma Lina - Soins technico-esthétiques médicaux à Ensuès-la-Redonne. Jet Peel, épilation laser, dermopigmentation et accompagnement naturopathique par Caroline Vedda.">
    <meta property="og:image" content="<?= htmlspecialchars($base_url . '/images/logo/ALG6.png', ENT_QUOTES); ?>">
    <meta property="og:url" content="<?= htmlspecialchars($canonical, ENT_QUOTES); ?>">
    <meta name="theme-color" content="#8B9A7B">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta property="og:site_name" content="ALG Derma Lina">
    <meta property="og:locale" content="fr_FR">
    <meta property="og:type" content="business.business">
    <meta property="business:contact_data:locality" content="Ensuès-la-Redonne">
    <meta property="business:contact_data:region" content="Provence-Alpes-Côte d'Azur">
    <meta property="business:contact_data:postal_code" content="13820">
    <meta property="business:contact_data:country_name" content="France">
    <meta name="geo.region" content="FR-13">
    <meta name="geo.placename" content="Ensuès-la-Redonne">
    <meta name="geo.position" content="43.355655;5.207106">
    <meta name="ICBM" content="43.355655, 5.207106">
    <script type="application/ld+json">
    {
    "@context": "https://schema.org",
    "@type": "MedicalBusiness",
    "name": "ALG Derma Lina",
    "description": "ALG Derma Lina - Soins technico-esthétiques médicaux à Ensuès-la-Redonne. Jet Peel, épilation laser, dermopigmentation et accompagnement naturopathique par Caroline Vedda.",
    "url": "https://algdermalina.fr",
    "logo": "https://algdermalina.fr/images/logo/ALG6.png",
    "image": "https://algdermalina.fr/images/ALGlevres.png",
    "telephone": "+33-6-35-56-58-62",
    
    "address": {
        "@type": "PostalAddress",
        "streetAddress": "11A avenue de la Vierge",
        "addressLocality": "Ensuès-la-Redonne",
        "postalCode": "13820",
        "addressRegion": "Provence-Alpes-Côte d'Azur",
        "addressCountry": "FR"
    },
    
    "geo": {
        "@type": "GeoCoordinates",
        "latitude": "43.355655",
        "longitude": "5.207106"
    },
    
    "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+33-6-35-56-58-62",
        "contactType": "customer service",
        "availableLanguage": "French"
    },
    
    "openingHoursSpecification": [
        {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": [
            "Monday",
            "Tuesday", 
            "Wednesday",
            "Thursday",
            "Friday"
        ],
        "opens": "09:00",
        "closes": "19:30"
        },
        {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": "Saturday",
        "opens": "09:00",
        "closes": "19:30"
        }
    ],
    
    "priceRange": "€€",
    "currenciesAccepted": "EUR",
    "paymentAccepted": ["Cash", "Credit Card"],
    
    "serviceArea": {
        "@type": "GeoCircle",
        "geoMidpoint": {
        "@type": "GeoCoordinates",
        "latitude": "43.355655",
        "longitude": "5.207106"
        },
        "geoRadius": "30000"
    },
    
    "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Services ALG Derma Lina",
        "itemListElement": [
        {
            "@type": "Offer",
            "itemOffered": {
            "@type": "Service",
            "name": "Dermopigmentation réparatrice",
            "description": "Tatouage médical reconstructeur pour cicatrices, vergetures, aréoles mammaires"
            }
        },
        {
            "@type": "Offer",
            "itemOffered": {
            "@type": "Service", 
            "name": "Épilation laser définitive",
            "description": "Épilation durable et sécurisée pour tous types de peaux"
            }
        },
        {
            "@type": "Offer",
            "itemOffered": {
            "@type": "Service",
            "name": "Soins Jet Peel",
            "description": "Technologie anti-âge non invasive pour nettoyer et régénérer la peau"
            }
        },
        {
            "@type": "Offer",
            "itemOffered": {
            "@type": "Service",
            "name": "Maquillage permanent",
            "description": "Redessine et sublime sourcils, yeux et lèvres durablement"
            }
        },
        {
            "@type": "Offer",
            "itemOffered": {
            "@type": "Service",
            "name": "Photobiomodulation LED",
            "description": "Luminothérapie pour stimuler le fonctionnement cellulaire naturel"
            }
        },
        {
            "@type": "Offer",
            "itemOffered": {
            "@type": "Service",
            "name": "Accompagnement naturopathique",
            "description": "Approche holistique pour rééquilibrer l'organisme naturellement"
            }
        }
        ]
    },
    
    "founder": {
        "@type": "Person",
        "name": "Caroline Vedda",
        "jobTitle": "Infirmière diplômée d'État spécialisée en dermopigmentation",
        "description": "Infirmière depuis 2006, spécialisée en dermopigmentation réparatrice à visée médicale et esthétique",
        "knowsAbout": [
        "Dermopigmentation",
        "Épilation laser",
        "Soins esthétiques médicaux",
        "Naturopathie",
        "Puériculture",
        "Jet Peel",
        "Photobiomodulation LED",
        "Maquillage permanent"
        ]
    },
    
    "areaServed": [
        "Ensuès-la-Redonne",
        "Marseille", 
        "Aix-en-Provence",
        "Martigues",
        "Carry-le-Rouet",
        "Sausset-les-Pins",
        "Châteauneuf-les-Martigues"
    ],
    
    "sameAs": [
        "https://www.instagram.com/ALG_DermaLina",
        "https://www.facebook.com/ALGdermalina"
    ]
    }
    </script>

    <title>ALG Derma Lina | Dermopigmentation & Soins Esthétiques Médicaux à Ensuès-la-Redonne</title>
    <link rel="icon" type="image/png" href="./images/favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Reset et Base */
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
        
        /* Header */
        header {
            background-color: var(--text-light);
            position: sticky;
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
        
        /* Hero Section */
        .hero {
            background: linear-gradient(rgba(250, 249, 247, 0.4), rgba(232, 221, 212, 0.8)),
                        url('images/ALGlevres.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }
        
        .hero::before {
            content: '';
            position: absolute;
            width: 200px;
            height: 240px;
            background-image: url("images/logo/ALG.png");
            background-repeat: no-repeat;
            background-size: contain;
            top: 10%;
            right: 5%;
            animation: float 20s ease-in-out infinite;
        }
        
        .hero::after {
            content: '';
            position: absolute;
            width: 180px;
            height: 220px;
            background-image: url("images/logo/ALG.png");
            background-repeat: no-repeat;
            background-size: contain;
            bottom: 10%;
            left: 5%;
            animation: float 20s ease-in-out infinite reverse;
        }
        
        @keyframes float {
            0%, 100% { transform: translate(0, 0) rotate(0deg); }
            33% { transform: translate(30px, -30px) rotate(120deg); }
            66% { transform: translate(-20px, 20px) rotate(240deg); }
        }
        
        .hero-content {
            text-align: center;
            z-index: 1;
            animation: fadeInUp 1s ease;
            max-width: 800px;
            padding: 0 2rem;
        }
        
        .hero h1 {
            font-size: 3.5rem;
            font-weight: 200;
            color: var(--text-dark);
            margin-bottom: 1.5rem;
            letter-spacing: 3px;
        }
        
        .hero p {
            font-size: 1.3rem;
            color: var(--text-dark);
            opacity: 0.8;
            margin-bottom: 2.5rem;
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .hero-buttons {
            display: flex;
            gap: 1.5rem;
            justify-content: center;
            flex-wrap: wrap;
        }
        
        .btn-primary, .btn-secondary {
            padding: 1rem 2.5rem;
            border-radius: 30px;
            text-decoration: none;
            transition: var(--transition);
            display: inline-block;
            font-size: 1.1rem;
            letter-spacing: 0.5px;
        }
        
        .btn-primary {
            background-color: var(--primary-color);
            color: white;
        }
        
        .btn-primary:hover {
            background-color: var(--accent-color);
            transform: translateY(-2px);
            box-shadow: var(--shadow);
        }
        
        .btn-secondary {
            background-color: transparent;
            color: var(--primary-color);
            border: 2px solid var(--primary-color);
        }
        
        .btn-secondary:hover {
            background-color: var(--primary-color);
            color: white;
        }
        
        /* Services Preview */
        .services-preview {
            padding: 5rem 5%;
            background-color: white;
        }
        
        .services-preview h2 {
            text-align: center;
            font-size: 2.5rem;
            font-weight: 200;
            color: var(--primary-color);
            margin-bottom: 3rem;
            letter-spacing: 2px;
        }
        
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .service-card {
            background-color: var(--bg-light);
            border-radius: 15px;
            padding: 2.5rem;
            text-align: center;
            transition: var(--transition);
            cursor: pointer;
            text-decoration: none;
            color: inherit;
            display: block;
            position: relative;
            overflow: hidden;
        }
        
        .service-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 3px;
            background: linear-gradient(90deg, var(--primary-color), var(--accent-color));
            transform: scaleX(0);
            transition: transform 0.3s ease;
        }
        
        .service-card:hover::before {
            transform: scaleX(1);
        }
        
        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow);
        }
        
        .service-icon {
            font-size: 3rem;
            margin-bottom: 1.5rem;
            transition: transform 0.3s ease;
        }
        
        .service-card:hover .service-icon {
            transform: scale(1.1);
        }
        
        .service-card h3 {
            font-size: 1.5rem;
            color: var(--text-dark);
            margin-bottom: 1rem;
            font-weight: 400;
        }
        
        .service-card p {
            color: var(--text-dark);
            opacity: 0.8;
            line-height: 1.6;
        }
        
        /* Testimonials */
        .testimonials {
            padding: 5rem 5%;
            background-color: var(--bg-light);
        }
        
        .testimonials h2 {
            text-align: center;
            font-size: 2.5rem;
            font-weight: 200;
            color: var(--primary-color);
            margin-bottom: 3rem;
            letter-spacing: 2px;
        }
        
        .testimonial-slider {
            max-width: 800px;
            margin: 0 auto;
            position: relative;
            overflow: hidden;
            min-height: 220px;
        }

        .testimonial-track {
            display: flex;
            transition: transform 0.5s ease;
            text-align: center;
        }

        .testimonial-nav {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            font-size: 2rem;
            color: var(--primary-color);
            cursor: pointer;
        }

        .testimonial-nav.prev { left: -40px; }
        .testimonial-nav.next { right: -40px; }
        
        .testimonial {
            flex: 0 0 100%;
            background-color: white;
            padding: 3rem;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.05);
        }
        
        .testimonial p {
            font-style: italic;
            font-size: 1.2rem;
            line-height: 1.8;
            color: var(--text-dark);
            margin-bottom: 2rem;
        }
        
        .testimonial-author {
            font-weight: 500;
            color: var(--primary-color);
        }
        
        /* CTA Section */
        .cta-section {
            background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
            padding: 4rem 5%;
            text-align: center;
            color: white;
        }
        
        .cta-section h2 {
            font-size: 2.5rem;
            font-weight: 200;
            margin-bottom: 1.5rem;
            letter-spacing: 2px;
        }
        
        .cta-section p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }
        
        .cta-section .btn-primary {
            background-color: white;
            color: var(--primary-color);
        }
        
        .cta-section .btn-primary:hover {
            background-color: var(--bg-light);
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
    <!-- Header -->
<?php include "partials/header.php"; ?>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>Révélez votre beauté naturelle</h1>
            <p>Soins technico-esthétiques médicaux innovants alliant expertise médicale et approche holistique</p>
            <p>Technologie alternative aux injections et à la chirurgie</p>
            <div class="hero-buttons">
                <a href="https://www.planity.com/alg-dermalina-13820-ensues-la-redonne" class="btn-primary">Réserver une consultation</a>
                <a href="services.php" class="btn-secondary">Découvrir nos services</a>
            </div>
        </div>
    </section>

    <!-- Services Preview -->
    <section class="services-preview">
        <h2>Nos Services</h2>
        <div class="services-grid">
            <a href="services.php#jet-peel" class="service-card">
                <div class="service-icon">💧</div>
                <h3>Jet Peel</h3>
                <p>Soin non invasif pour nettoyer, hydrater et régénérer votre peau en profondeur.</p>
            </a>
            <a href="services.php#laser" class="service-card">
                <div class="service-icon">⚡</div>
                <h3>Laser Médical</h3>
                <p>Épilation durable et sécurisée pour tous types de peaux.</p>
            </a>
            <a href="services.php#dermopigmentation" class="service-card">
                <div class="service-icon">🎨</div>
                <h3>Dermopigmentation</h3>
                <p>Maquillage permanent et tatouage médical reconstructeur.</p>
            </a>
        </div>
        <div style="text-align: center; margin-top: 3rem;">
            <a href="services.php" class="btn-secondary">Voir tous nos services</a>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="testimonials">
        <h2>Témoignages</h2>
        <div class="testimonial-slider">
            <div class="testimonial-track">
                <div class="testimonial">
                    <p>"Caroline est une professionnelle exceptionnelle. Son approche médicale combinée à sa douceur fait toute la différence. Les résultats du Jet Peel sont incroyables !"</p>
                    <div class="testimonial-author">- Marie L.</div>
                </div>
                <div class="testimonial">
                    <p>"J'ai trouvé un véritable accompagnement personnalisé. Caroline met tout en œuvre pour notre confort."</p>
                    <div class="testimonial-author">- Jean P.</div>
                </div>
                <div class="testimonial">
                    <p>"Un service de qualité et des résultats visibles dès la première séance !"</p>
                    <div class="testimonial-author">- Sophie D.</div>
                </div>
            </div>
            <button class="testimonial-nav prev" aria-label="Précédent"><i class="fas fa-chevron-left"></i></button>
            <button class="testimonial-nav next" aria-label="Suivant"><i class="fas fa-chevron-right"></i></button>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <h2>Prête à révéler votre beauté ?</h2>
        <p>Prenez rendez-vous dès aujourd'hui pour une consultation personnalisée</p>
        <a href="https://www.planity.com/alg-dermalina-13820-ensues-la-redonne" class="btn-primary">Réserver maintenant</a>
    </section>

    <!-- Footer -->
<?php include "partials/footer.php"; ?>
</body>
</html>