<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#8B9A7B">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

    <title>Mentions légales - ALG Derma Lina</title>
    <link rel="icon" type="image/png" href="./images/logo/ALG3.png">
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
    <h1>Mentions légales</h1>
    <p>Informations légales du site ALG Derma Lina</p>
</section>
<section class="section">
    <div class="container">
        <h2>Éditeur du site</h2>
        <p>ALG Derma Lina - Caroline Vedda<br>Ensuès-la-Redonne, France</p>

        <h2>Directrice de publication</h2>
        <p>Caroline Vedda</p>

        <h2>Développement du site</h2>
        <p>Dev2ls - Stéphane Palmini<br>13820 Ensuès-la-Redonne, France</p>

        <h2>Hébergement</h2>
        <p>Ce site est hébergé par OVH.</p>

        <h2>Propriété intellectuelle</h2>
        <p>L'ensemble des contenus présents sur ce site est la propriété exclusive d'ALG Derma Lina. Toute reproduction est interdite sans autorisation préalable.</p>

        <h2>Responsabilité</h2>
        <p>L'éditeur du site ne peut être tenu responsable des dommages directs ou indirects résultant de l'accès ou de l'utilisation du site.</p>

        <h2>Données personnelles</h2>
        <p>Les informations recueillies via les formulaires sont destinées à l'usage d'ALG Derma Lina. Pour plus d'informations, consultez notre politique de confidentialité.</p>

        <h2>Liens externes</h2>
        <p>Ce site peut contenir des liens vers d'autres sites. ALG Derma Lina n'est pas responsable du contenu de ces sites externes.</p>
    </div>
</section>
<?php include 'partials/footer.php'; ?>
</body>
</html>
