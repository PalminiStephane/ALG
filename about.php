<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez Caroline Vedda, infirmière et naturopathe certifiée. ALG Derma Lina à Ensuès-la-Redonne, expertise médicale et approche holistique.">
    <title>À propos - Caroline Vedda | ALG Derma Lina</title>
    
    <link rel="stylesheet" href="css/style.css">
    
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
        
        /* About Hero */
        .about-hero {
            background: linear-gradient(135deg, var(--secondary-color), var(--bg-light));
            padding: 6rem 5% 4rem;
            position: relative;
            overflow: hidden;
        }
        
        .about-hero::before {
            content: '';
            position: absolute;
            width: 150px;
            height: 180px;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 100 140' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M25 50Q10 30 10 20Q10 5 25 5Q40 5 40 20Q40 30 25 50M30 25L20 25M20 25L25 40L30 25M25 50Q55 30 55 20Q55 5 70 5Q85 5 85 20Q85 30 75 40Q65 50 55 45L55 35L70 35M25 50L25 85L45 85' stroke='%238B9A7B' stroke-width='2' fill='none' opacity='0.1'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-size: contain;
            top: 20%;
            right: 10%;
            animation: float 20s ease-in-out infinite;
        }
        
        @keyframes float {
            0%, 100% { transform: translate(0, 0) rotate(0deg); }
            33% { transform: translate(30px, -30px) rotate(120deg); }
            66% { transform: translate(-20px, 20px) rotate(240deg); }
        }
        
        .about-hero-content {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
            position: relative;
            z-index: 1;
        }
        
        .about-text h1 {
            color: var(--primary-color);
            font-size: 3rem;
            font-weight: 200;
            margin-bottom: 1.5rem;
            letter-spacing: 2px;
        }
        
        .about-text p {
            font-size: 1.2rem;
            color: var(--text-dark);
            opacity: 0.9;
            margin-bottom: 1.5rem;
            line-height: 1.8;
        }
        
        .about-image {
            position: relative;
            overflow: hidden;
            border-radius: 15px;
            height: 400px;
            background-color: #E8DDD4;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: var(--shadow);
        }
        
        .about-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        /* Parcours Section */
        .parcours-section {
            padding: 5rem 5%;
            background-color: white;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .parcours-section h2 {
            text-align: center;
            color: var(--primary-color);
            font-size: 2.5rem;
            font-weight: 200;
            margin-bottom: 3rem;
            letter-spacing: 2px;
        }
        
        .timeline {
            position: relative;
            padding: 2rem 0;
        }
        
        .timeline::before {
            content: '';
            position: absolute;
            left: 50%;
            top: 0;
            bottom: 0;
            width: 2px;
            background-color: var(--primary-color);
            opacity: 0.3;
        }
        
        .timeline-item {
            display: flex;
            align-items: center;
            margin-bottom: 4rem;
            position: relative;
        }
        
        .timeline-item:nth-child(even) {
            flex-direction: row-reverse;
        }
        
        .timeline-content {
            width: 45%;
            padding: 2rem;
            background-color: var(--bg-light);
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.05);
            transition: transform 0.3s ease;
        }
        
        .timeline-content:hover {
            transform: translateY(-5px);
        }
        
        .timeline-year {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            background-color: var(--accent-color);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-weight: 500;
        }
        
        .timeline-content h3 {
            color: var(--primary-color);
            margin-bottom: 1rem;
            font-size: 1.3rem;
            font-weight: 400;
        }
        
        .timeline-content p {
            color: var(--text-dark);
            opacity: 0.8;
            line-height: 1.6;
        }
        
        /* Valeurs Section */
        .values-section {
            padding: 5rem 5%;
            background-color: var(--bg-light);
        }
        
        .values-section h2 {
            text-align: center;
            color: var(--primary-color);
            font-size: 2.5rem;
            font-weight: 200;
            margin-bottom: 3rem;
            letter-spacing: 2px;
        }
        
        .values-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            max-width: 1000px;
            margin: 0 auto;
        }
        
        .value-card {
            background-color: white;
            padding: 2.5rem;
            border-radius: 15px;
            text-align: center;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .value-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 3px;
            background: linear-gradient(90deg, var(--primary-color), var(--accent-color));
        }
        
        .value-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow);
        }
        
        .value-icon {
            font-size: 3rem;
            margin-bottom: 1.5rem;
            color: var(--accent-color);
        }
        
        .value-card h3 {
            color: var(--primary-color);
            margin-bottom: 1rem;
            font-size: 1.3rem;
            font-weight: 400;
        }
        
        .value-card p {
            color: var(--text-dark);
            opacity: 0.8;
            line-height: 1.6;
        }
        
        /* Certifications Section */
        .certifications-section {
            padding: 5rem 5%;
            background-color: white;
        }
        
        .certifications-section h2 {
            text-align: center;
            color: var(--primary-color);
            font-size: 2.5rem;
            font-weight: 200;
            margin-bottom: 3rem;
            letter-spacing: 2px;
        }
        
        .certifications-list {
            max-width: 800px;
            margin: 0 auto;
        }
        
        .certification-item {
            display: flex;
            align-items: center;
            margin-bottom: 2rem;
            padding: 1.5rem;
            background-color: var(--bg-light);
            border-radius: 10px;
            transition: all 0.3s ease;
        }
        
        .certification-item:hover {
            background-color: white;
            box-shadow: var(--shadow);
        }
        
        .cert-icon {
            font-size: 2rem;
            margin-right: 2rem;
            color: var(--accent-color);
        }
        
        .cert-content h3 {
            color: var(--primary-color);
            margin-bottom: 0.5rem;
            font-weight: 400;
        }
        
        .cert-content p {
            color: var(--text-dark);
            opacity: 0.8;
            font-size: 0.9rem;
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
            padding: 1rem 2.5rem;
            border-radius: 30px;
            text-decoration: none;
            display: inline-block;
            transition: var(--transition);
        }
        
        .cta-section .btn-primary:hover {
            background-color: var(--bg-light);
            transform: translateY(-2px);
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
            
            .about-hero-content {
                grid-template-columns: 1fr;
                gap: 2rem;
            }
            
            .about-text h1 {
                font-size: 2rem;
            }
            
            .timeline::before {
                left: 30px;
            }
            
            .timeline-item {
                flex-direction: column;
                align-items: flex-start;
            }
            
            .timeline-item:nth-child(even) {
                flex-direction: column;
            }
            
            .timeline-content {
                width: calc(100% - 60px);
                margin-left: 60px;
            }
            
            .timeline-year {
                left: 30px;
            }
            
            .values-grid {
                grid-template-columns: 1fr;
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
            <li>À propos</li>
        </ul>
    </div>

    <!-- About Hero -->
    <section class="about-hero">
        <div class="about-hero-content">
            <div class="about-text">
                <h1>Caroline Vedda</h1>
                <p>Infirmière diplômée et naturopathe certifiée, j'ai choisi de mettre mon expertise médicale au service de votre beauté et de votre bien-être.</p>
                <p>Installée à Ensuès-la-Redonne, dans un cadre paisible entre mer et nature, je vous accueille dans un espace dédié à votre sérénité et à votre épanouissement.</p>
                <p>Mon approche unique allie rigueur médicale et vision holistique pour des soins personnalisés qui révèlent votre beauté naturelle.</p>
            </div>
            <div class="about-image">
                <p style="color: #8B9A7B; font-size: 1.2rem;">Photo de Caroline Vedda</p>
            </div>
        </div>
    </section>

    <!-- Parcours Section -->
    <section class="parcours-section">
        <div class="container">
            <h2>Mon Parcours</h2>
            
            <div class="timeline">
                <div class="timeline-item">
                    <div class="timeline-content">
                        <h3>Diplôme d'État d'Infirmière</h3>
                        <p>Formation initiale en soins infirmiers. Une base solide pour comprendre le corps humain et ses besoins.</p>
                    </div>
                    <div class="timeline-year">2010</div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-content">
                        <h3>Expérience Hospitalière</h3>
                        <p>Plusieurs années en milieu hospitalier, développant expertise et sens du soin. Cette expérience forge mon approche rigoureuse et bienveillante.</p>
                    </div>
                    <div class="timeline-year">2010-2018</div>

                </div><div class="timeline-item">
                    <div class="timeline-content">
                        <h3>Expérience Infirmière Liberale</h3>
                        <p>Plusieurs années dans le liberale, développant expertise et sens du soin. Cette expérience forge mon approche rigoureuse et bienveillante.</p>
                    </div>
                    <div class="timeline-year">2018-2023</div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-content">
                        <h3>Diplôme d'État d'Infirmière en puériculture</h3>
                        <p>Formation en soins infirmiers spécialisée en puériculture</p>
                    </div>
                    <div class="timeline-year">2023-2024</div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-content">
                        <h3>Formation en Naturopathie</h3>
                        <p>Certification en naturopathie pour une approche holistique de la santé. L'alliance parfaite entre médecine conventionnelle et médecines douces.</p>
                    </div>
                    <div class="timeline-year">2025</div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-content">
                        <h3>Formations Technico-Esthétiques</h3>
                        <p>Spécialisations en dermopigmentation, laser médical, et technologies esthétiques avancées. Une expertise technique au service de la beauté.</p>
                    </div>
                    <div class="timeline-year">2025</div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-content">
                        <h3>Création d'ALG Derma Lina</h3>
                        <p>Ouverture de mon cabinet à Ensuès-la-Redonne, concrétisant ma vision d'un lieu unique alliant expertise médicale et bien-être holistique.</p>
                    </div>
                    <div class="timeline-year">2025</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Valeurs Section -->
    <section class="values-section">
        <div class="container">
            <h2>Mes Valeurs</h2>
            
            <div class="values-grid">
                <div class="value-card">
                    <div class="value-icon">🌿</div>
                    <h3>Approche Holistique</h3>
                    <p>Je considère chaque personne dans sa globalité, prenant en compte le corps, l'esprit et les émotions pour des soins vraiment personnalisés.</p>
                </div>
                
                <div class="value-card">
                    <div class="value-icon">⚕️</div>
                    <h3>Rigueur Médicale</h3>
                    <p>Mon parcours d'infirmière garantit des soins sécurisés, avec des protocoles stricts d'hygiène et une expertise technique irréprochable.</p>
                </div>
                
                <div class="value-card">
                    <div class="value-icon">💝</div>
                    <h3>Bienveillance</h3>
                    <p>Créer un espace de confiance où chacun se sent écouté, respecté et accompagné dans son parcours beauté et bien-être.</p>
                </div>
                
                <div class="value-card">
                    <div class="value-icon">🌟</div>
                    <h3>Excellence</h3>
                    <p>Formation continue et veille technologique pour vous offrir les techniques les plus avancées et les résultats les plus probants.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Certifications Section -->
    <section class="certifications-section">
        <div class="container">
            <h2>Mes Certifications</h2>
            
            <div class="certifications-list">
                <div class="certification-item">
                    <div class="cert-icon">🎓</div>
                    <div class="cert-content">
                        <h3>Diplôme d'État d'Infirmière</h3>
                        <p>Formation complète en soins infirmiers avec spécialisation en puériculture</p>
                    </div>
                </div>
                
                <div class="certification-item">
                    <div class="cert-icon">🌱</div>
                    <div class="cert-content">
                        <h3>Certification en Naturopathie</h3>
                        <p>Formation certifiante en naturopathie et conseils en hygiène de vie</p>
                    </div>
                </div>
                
                <div class="certification-item">
                    <div class="cert-icon">✨</div>
                    <div class="cert-content">
                        <h3>Formation Dermopigmentation</h3>
                        <p>Techniques avancées de maquillage permanent et tatouage médical</p>
                    </div>
                </div>
                
                <div class="certification-item">
                    <div class="cert-icon">⚡</div>
                    <div class="cert-content">
                        <h3>Certification Laser Médical</h3>
                        <p>Utilisation sécurisée des lasers médicaux pour l'épilation définitive</p>
                    </div>
                </div>
                
                <div class="certification-item">
                    <div class="cert-icon">💫</div>
                    <div class="cert-content">
                        <h3>Formation LED Thérapie</h3>
                        <p>Maîtrise de la photobiomodulation et ses applications thérapeutiques</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <h2>Rencontrons-nous</h2>
        <p>Je serais ravie de vous accueillir et de créer ensemble votre programme beauté personnalisé</p>
        <a href="contact.php#booking" class="btn-primary">Prendre rendez-vous</a>
    </section>

<?php include "partials/footer.php"; ?>
