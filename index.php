<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="ALG Derma Lina - Soins technico-esthétiques médicaux à Ensuès-la-Redonne. Jet Peel, épilation laser, dermopigmentation et accompagnement naturopathique par Caroline Vedda.">
    <meta name="keywords" content="soins esthétiques médicaux, jet peel, épilation laser, dermopigmentation, naturopathie, Marseille">
    <title>ALG Derma Lina - Soins Technico-Esthétiques Médicaux | Accueil</title>
    
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
            width: 40px;
            height: 48px;
            margin-right: 15px;
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
            background: linear-gradient(135deg, #FAF9F7 0%, #E8DDD4 50%, #FAF9F7 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
            padding-top: 80px;
        }
        
        .hero::before {
            content: '';
            position: absolute;
            width: 200px;
            height: 240px;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 100 140' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M25 50Q10 30 10 20Q10 5 25 5Q40 5 40 20Q40 30 25 50M30 25L20 25M20 25L25 40L30 25M25 50Q55 30 55 20Q55 5 70 5Q85 5 85 20Q85 30 75 40Q65 50 55 45L55 35L70 35M25 50L25 85L45 85' stroke='%238B9A7B' stroke-width='2' fill='none' opacity='0.1'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-size: contain;
            top: 10%;
            right: 5%;
            animation: float 20s ease-in-out infinite;
        }
        
        .hero::after {
            content: '';
            position: absolute;
            width: 150px;
            height: 180px;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 100 140' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M25 50Q10 30 10 20Q10 5 25 5Q40 5 40 20Q40 30 25 50M30 25L20 25M20 25L25 40L30 25M25 50Q55 30 55 20Q55 5 70 5Q85 5 85 20Q85 30 75 40Q65 50 55 45L55 35L70 35M25 50L25 85L45 85' stroke='%23D4A574' stroke-width='1.5' fill='none' opacity='0.08'/%3E%3C/svg%3E");
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
            text-align: center;
            position: relative;
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
        @media (max-width: 768px) {
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
            <div class="hero-buttons">
                <a href="contact.php#booking" class="btn-primary">Réserver une consultation</a>
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
            <button class="testimonial-nav prev" aria-label="Précédent"><i class="fas fa-chevron-left"></i></button>
            <button class="testimonial-nav next" aria-label="Suivant"><i class="fas fa-chevron-right"></i></button>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <h2>Prête à révéler votre beauté ?</h2>
        <p>Prenez rendez-vous dès aujourd'hui pour une consultation personnalisée</p>
        <a href="contact.php#booking" class="btn-primary">Réserver maintenant</a>
    </section>

    <!-- Footer -->
<?php include "partials/footer.php"; ?>
</body>
</html>