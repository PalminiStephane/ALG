<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez Caroline Vedda, infirmière et naturopathe certifiée. ALG Derma Lina à Ensuès-la-Redonne, expertise médicale et approche holistique.">
    <meta name="theme-color" content="#8B9A7B">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

    <title>À propos - Caroline Vedda | ALG Derma Lina</title>

    <link rel="icon" type="image/png" href="./images/logo/ALG3.png">
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
            width: 180px;
            height: 220px;
            background-image: url("images/logo/ALG.png");
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

        /* Biography Section */
        .bio-section {
            padding: 5rem 5%;
            background-color: white;
        }

        .bio-section .container {
            max-width: 800px;
            margin: 0 auto;
        }

        .bio-section h2 {
            text-align: center;
            color: var(--primary-color);
            font-size: 2.5rem;
            font-weight: 200;
            margin-bottom: 3rem;
            letter-spacing: 2px;
        }

        .bio-section h3 {
            color: var(--primary-color);
            margin-top: 2rem;
            margin-bottom: 1rem;
            font-weight: 400;
        }

        .bio-section p {
            font-size: 1.1rem;
            color: var(--text-dark);
            opacity: 0.9;
            line-height: 1.8;
            margin-bottom: 1.5rem;
        }

        .bio-section blockquote {
            font-size: 1.3rem;
            color: var(--primary-color);
            text-align: center;
            font-style: italic;
            margin-top: 2rem;
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
                <p>Infirmière diplômée d’Etat spécialisée en dermopigmentation réparatrice à visée médicale et esthétique - Experte en soins du visage et épilation définitive au laser.</p>
                <p>Installée à Ensuès-la-Redonne, dans un cadre paisible entre mer et nature, je vous accueille dans un espace dédié à votre sérénité et à votre épanouissement.</p>
                <p>Mon approche unique allie rigueur médicale et vision holistique pour des soins personnalisés qui révèlent votre beauté naturelle.</p>
            </div>
            <div class="about-image">
                <img src="images/cabinetALG.png" alt="Photo de Caroline Vedda">
            </div>
        </div>
    </section>

    <!-- Biography Section -->
    <section class="bio-section">
        <div class="container">
            <h2>Qui suis-je ?</h2>
            <p>Je suis Caroline, 40 ans, infirmière depuis 2006. Une vocation pour moi d’exercer ce métier. Originaire de Moselle-Est, j’ai exercé dans ma région natale, puis au Luxembourg où j'ai accompagné mes patients dans leurs parcours de soins, souvent face à la maladie, la douleur, et des moments de grande vulnérabilité.</p>
            <p>Soigner, écouter, accompagner : cela a toujours été au cœur de ma vocation. Mais après 20 ans à évoluer dans ce milieu, j’ai ressenti le besoin de prendre une autre direction, tout en restant fidèle à ce qui m’anime profondément : prendre soin des autres.</p>
            <p>En 2016, je me forme en naturopathie, avec l’envie d’intégrer une approche plus naturelle du soin – un tournant personnel, après la naissance de mes deux premiers enfants.</p>
            <p>En 2023, je réalise un autre rêve : devenir infirmière puéricultrice, afin d’être au plus près des tout-petits. Mais à ce moment-là, une évidence s’impose à moi : je ne me reconnais plus dans la prise en charge de la maladie. Je ressens le besoin de contribuer autrement au bien-être des personnes.</p>
            <p>C’est lors d’un séminaire à Nice sur l’esthétique à visée médicale et esthétique que le déclic a lieu. Je découvre un univers où je peux continuer à aider, accompagner, redonner confiance – mais à travers une approche différente : celle de l’esthétique et du soin de soi.</p>
            <p>Je me forme alors à la dermopigmentation réparatrice,au maquillage permanent, aux soins du visage, à l’épilation laser, et je me prépare aujourd’hui à ouvrir mon propre espace de bien-être et d’esthétique, en septembre 2025.</p>

            <h3>ALG DermaLina, une histoire de cœur</h3>
            <p>Ce projet je ne le construis pas seule. Mon mari, qui a toujours été là pour moi, m’a encouragée dans mes moments de doute. Son soutien indéfectible m’a permis de transformer mes rêves en réalité. Ce nouveau chapitre c’est aussi grâce à lui que je l’écris aujourd’hui.</p>
            <p>Le nom de ma société est un hommage à ce qui compte le plus pour moi : « ALG » sont les initiales de mes trois enfants qui me donnent la force d’avancer, et « Lina » à ma grand-mère qui m’a transmis le goût du soin et de l’attention à l’autre. À travers ce nom, je porte avec moi leur amour et leur énergie dans chaque soin que je réaliserai avec passion, écoute et respect.</p>

            <h3>Ma mission</h3>
            <p>Ce projet, c’est une reconversion, mais surtout une continuité : celle de mettre mes compétences au service des autres. Redonner confiance, révéler la beauté naturelle de chacun(e), accompagner un nouveau départ – voilà ce qui me porte.</p>
            <p>Je suis fière de débuter cette nouvelle aventure. Et plus que jamais, je ferai tout pour que chaque personne qui me confie son visage et son corps reparte sereine, écoutée et valorisée.</p>
            <blockquote>« Votre bien-être et votre satisfaction sont au cœur de ma démarche »</blockquote>
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
                    <div class="timeline-year">2006</div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-content">
                        <h3>Naturopathe</h3>
                        <p>Certification en naturopathie pour une approche holistique de la santé. L'alliance parfaite entre médecine conventionnelle et médecines douces.</p>
                    </div>
                    <div class="timeline-year">2016</div>

                </div><div class="timeline-item">
                    <div class="timeline-content">
                        <h3>Diplôme d'État d'Infirmière en puériculture</h3>
                        <p>Diplômée infirmière puéricultrice, j'accompagne les familles dans le développement et la santé des tout-petits avec expertise et bienveillance.</p>
                    </div>
                    <div class="timeline-year">2023</div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-content">
                        <h3>Formation esthétique sur la dermopigmentation; l’épilation au laser; soins du visage</h3>
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
        <a href="tel:+33635565862" class="btn-primary">Prendre rendez-vous</a>
    </section>

<?php include "partials/footer.php"; ?>
