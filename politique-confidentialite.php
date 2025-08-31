<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Politique de confidentialité - ALG Derma Lina</title>
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
        <h2>Données collectées</h2>
        <p>Nous collectons uniquement les informations nécessaires au traitement de vos demandes et à la prise de rendez-vous.</p>
        <h2>Utilisation des données</h2>
        <p>Vos données ne sont utilisées que pour vous contacter et assurer le suivi de nos prestations. Elles ne sont jamais revendues à des tiers.</p>
        <h2>Vos droits</h2>
        <p>Conformément à la réglementation en vigueur, vous disposez d'un droit d'accès, de rectification et de suppression de vos données en nous contactant.</p>
    </div>
</section>
<?php include 'partials/footer.php'; ?>
</body>
</html>
