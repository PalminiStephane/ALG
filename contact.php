<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Contactez ALG Derma Lina pour réserver votre consultation. Caroline Vedda, infirmière spécialisée en soins technico-esthétiques à Ensuès-la-Redonne.">
    <meta name="theme-color" content="#8B9A7B">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

    <title>Contact & Réservation - ALG Derma Lina</title>

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
            color: var(--text-dark);
            text-decoration: none;
            transition: var(--transition);
        }

        .breadcrumb a:hover {
            color: var(--accent-color);
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
        
        /* Contact Section */
        .contact-section {
            padding: 5rem 5%;
        }

        .contact-section a {
            color: var(--text-dark);
            text-decoration: none;
            transition: var(--transition);
        }

        .contact-section a:hover {
            color: var(--accent-color);
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .contact-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
        }
        
        .contact-info {
            background-color: white;
            padding: 3rem;
            border-radius: 15px;
            box-shadow: var(--shadow);
        }
        
        .contact-info h2 {
            color: var(--primary-color);
            margin-bottom: 2rem;
            font-weight: 300;
        }
        
        .info-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 2rem;
        }
        
        .info-item .icon {
            font-size: 1.5rem;
            margin-right: 1.5rem;
            color: var(--accent-color);
            min-width: 30px;
        }
        
        .info-item h3 {
            color: var(--primary-color);
            font-size: 1.2rem;
            margin-bottom: 0.5rem;
            font-weight: 400;
        }
        
        .info-item p {
            color: var(--text-dark);
            opacity: 0.8;
        }
        
        .hours-table {
            width: 100%;
            margin-top: 1rem;
        }
        
        .hours-table tr {
            display: flex;
            justify-content: space-between;
            padding: 0.5rem 0;
            border-bottom: 1px solid rgba(0,0,0,0.1);
        }
        
        .hours-table tr:last-child {
            border-bottom: none;
        }
        
        .map-section {
            margin-top: 4rem;
            border-radius: 15px;
            overflow: hidden;
            height: 400px;
        }

        .map-section iframe {
            width: 100%;
            height: 100%;
            border: 0;
            display: block;
        }
        
        /* Booking Section */
        #booking {
            background-color: var(--bg-light);
            padding: 5rem 5%;
        }
        
        .booking-container {
            max-width: 800px;
            margin: 0 auto;
        }
        
        .booking-container h2 {
            text-align: center;
            color: var(--primary-color);
            font-size: 2.5rem;
            font-weight: 200;
            margin-bottom: 3rem;
        }

        #booking .cta-button {
            display: block;
            width: fit-content;
            margin: 0 auto;
        }

        .booking-form {
            background-color: white;
            padding: 3rem;
            border-radius: 15px;
            box-shadow: var(--shadow);
        }
        
        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1.5rem;
            margin-bottom: 1.5rem;
        }
        
        .form-group {
            margin-bottom: 1.5rem;
        }
        
        .form-group label {
            display: block;
            color: var(--text-dark);
            font-weight: 400;
            margin-bottom: 0.5rem;
            letter-spacing: 0.5px;
        }
        
        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 1rem;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            font-size: 1rem;
            transition: border-color 0.3s ease;
            background-color: var(--bg-light);
            font-family: inherit;
        }
        
        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: var(--primary-color);
            background-color: white;
        }
        
        .form-group textarea {
            resize: vertical;
            min-height: 120px;
        }
        
        .form-group.checkbox {
            display: flex;
            align-items: flex-start;
            gap: 10px;
        }
        
        .form-group.checkbox input[type="checkbox"] {
            width: auto;
            margin-top: 5px;
        }
        
        .submit-button {
            background-color: var(--primary-color);
            color: white;
            padding: 1rem 3rem;
            border: none;
            border-radius: 30px;
            font-size: 1.1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            letter-spacing: 1px;
            display: block;
            margin: 2rem auto 0;
        }
        
        .submit-button:hover {
            background-color: var(--accent-color);
            transform: translateY(-2px);
            box-shadow: var(--shadow);
        }
        
        .submit-button:disabled {
            opacity: 0.6;
            cursor: not-allowed;
        }
        
        /* FAQ Section */
        .faq-section {
            padding: 5rem 5%;
            background-color: white;
        }
        
        .faq-section h2 {
            text-align: center;
            color: var(--primary-color);
            font-size: 2.5rem;
            font-weight: 200;
            margin-bottom: 3rem;
        }
        
        .faq-container {
            max-width: 800px;
            margin: 0 auto;
        }
        
        details {
            margin-bottom: 1rem;
            padding: 1.5rem;
            background-color: var(--bg-light);
            border-radius: 10px;
            transition: all 0.3s ease;
        }
        
        details summary {
            cursor: pointer;
            font-weight: 500;
            color: var(--primary-color);
            list-style: none;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        details summary::-webkit-details-marker {
            display: none;
        }
        
        details summary::after {
            content: '+';
            font-size: 1.5rem;
            color: var(--accent-color);
            transition: transform 0.3s ease;
        }
        
        details[open] summary::after {
            transform: rotate(45deg);
        }
        
        details[open] {
            background-color: white;
            box-shadow: 0 4px 20px rgba(0,0,0,0.05);
        }
        
        details p {
            margin-top: 1rem;
            color: var(--text-dark);
            opacity: 0.9;
            line-height: 1.8;
        }
        
        /* Alert Messages */
        .alert {
            padding: 1rem 1.5rem;
            border-radius: 8px;
            margin-bottom: 2rem;
            animation: fadeInUp 0.5s ease;
        }
        
        .alert-success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }
        
        .alert-error {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
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
        
        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
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
            
            .contact-container {
                grid-template-columns: 1fr;
                gap: 2rem;
            }
            
            .form-row {
                grid-template-columns: 1fr;
            }
            
            .contact-info,
            .booking-form {
                padding: 2rem;
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

    <!-- Breadcrumb -->
    <div class="breadcrumb">
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li>Contact</li>
        </ul>
    </div>

    <!-- Page Header -->
    <section class="page-header">
        <h1>Contact & Réservation</h1>
        <p>Prenez rendez-vous pour votre consultation personnalisée</p>
    </section>

    <!-- Contact Information -->
    <section class="contact-section">
        <div class="container">
            <div class="contact-container">
                <div class="contact-info">
                    <h2>Informations de contact</h2>
                    
                    <div class="info-item">
                        <div class="icon">📞</div>
                        <div>
                            <h3>Téléphone</h3>
                            <p><a href="tel:+33635565862">06 35 56 58 62</a></p>
                            <p style="font-size: 0.9rem;">Disponible du lundi au vendredi</p>
                        </div>
                    </div>

                    <div class="info-item">
                        <div class="icon">📧</div>
                        <div>
                            <h3>Email</h3>
                            <p><a href="mailto:alg.dermalina@gmail.com">alg.dermalina@gmail.com</a></p>
                            <p style="font-size: 0.9rem;">Réponse sous 24-48h</p>
                        </div>
                    </div>

                    <div class="info-item">
                        <div class="icon">📍</div>
                        <div>
                            <h3>Adresse</h3>
                            <p><a href="https://www.google.com/maps?q=11A+Av.+de+la+Vierge+13820+Ensu%C3%A8s-la-Redonne" target="_blank" rel="noopener">Espace Santé <br>11A Av. de la Vierge <br>13820 Ensuès-la-Redonne</a></p>
                            <p style="font-size: 0.9rem;">L'entrée se trouve à gauche<br> du batiment au 1er étage<br> Parking derrière le labo / kiné</p>
                        </div>
                    </div>
                    
                    <div class="info-item">
                        <div class="icon">🕒</div>
                        <div>
                            <h3>Horaires d'ouverture</h3>
                            <table class="hours-table">
                                <tr>
                                    <td>Lundi - Vendredi&nbsp;</td>
                                    <td>9h00 - 18h00</td>
                                </tr>
                                <tr>
                                    <td>Samedi</td>
                                    <td>Sur rendez-vous</td>
                                </tr>
                                <tr>
                                    <td>Dimanche</td>
                                    <td>Fermé</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                
                <div class="map-section">
                    <iframe
                        src="https://www.google.com/maps?q=43.3557186,5.2075135&hl=fr&z=16&output=embed"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                        title="Localisation de ALG Derma Lina"
                    ></iframe>
                </div>
            </div>
        </div>
    </section>

    <section id="booking">
        <div class="booking-container">
            <a href="tel:+33635565862" class="cta-button">Réserver votre consultation</a>
        </div>
    </section>
    <!-- Booking Form 
    <section id="booking">
        <div class="booking-container">
            <h2>Réserver votre consultation</h2>
            
            <form class="booking-form" action="process_booking.php" method="POST">
                <div class="form-row">
                    <div class="form-group">
                        <label for="name">Nom complet *</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Téléphone *</label>
                        <input type="tel" id="phone" name="phone" required pattern="[0-9\s]{10,14}" placeholder="06 12 34 56 78">
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <label for="email">Email *</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="service">Service souhaité *</label>
                        <select id="service" name="service" required>
                            <option value="">Sélectionnez un service</option>
                            <option value="jet-peel">Jet Peel</option>
                            <option value="laser">Épilation Laser Médical</option>
                            <option value="naturopathie">Accompagnement Naturopathique</option>
                            <option value="led">Photobiomodulation LED</option>
                            <option value="dermopigmentation">Dermopigmentation</option>
                            <option value="parentalite">Accompagnement à la Parentalité</option>
                            <option value="consultation">Consultation générale</option>
                        </select>
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <label for="date">Date souhaitée *</label>
                        <input type="date" id="date" name="date" required>
                    </div>
                    <div class="form-group">
                        <label for="time">Créneau horaire préféré *</label>
                        <select id="time" name="time" required>
                            <option value="">Sélectionnez un créneau</option>
                            <option value="09:00-10:00">9h00 - 10h00</option>
                            <option value="10:00-11:00">10h00 - 11h00</option>
                            <option value="11:00-12:00">11h00 - 12h00</option>
                            <option value="14:00-15:00">14h00 - 15h00</option>
                            <option value="15:00-16:00">15h00 - 16h00</option>
                            <option value="16:00-17:00">16h00 - 17h00</option>
                            <option value="17:00-18:00">17h00 - 18h00</option>
                        </select>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="message">Message ou informations complémentaires</label>
                    <textarea id="message" name="message" placeholder="Décrivez vos besoins, vos attentes ou toute information utile..."></textarea>
                </div>
                
                <div class="form-group checkbox">
                    <input type="checkbox" id="consent" name="consent" required>
                    <label for="consent">J'accepte que mes données soient utilisées pour traiter ma demande de rendez-vous *</label>
                </div>
                
                <button type="submit" class="submit-button">Envoyer ma demande de réservation</button>
                
                <p style="text-align: center; margin-top: 1.5rem; opacity: 0.7; font-size: 0.9rem;">
                    * Champs obligatoires - Nous vous confirmerons votre rendez-vous dans les 24 à 48 heures
                </p>
            </form>
        </div>
    </section>
    -->

    <!-- Contact Form -->
    <section class="contact-form-section" id="contact-form">
        <div class="booking-container">
            <h2>Contactez-nous</h2>
            <?php
                $error = $_SESSION['contact_error'] ?? '';
                $success = !empty($_SESSION['contact_success']);
                $_SESSION['contact_error'] = $_SESSION['contact_success'] = null;
                $a = rand(1,9);
                $b = rand(1,9);
                $_SESSION['captcha_answer'] = $a + $b;
            ?>
            <?php if($success): ?>
                <div class="alert alert-success">Message envoyé !</div>
            <?php elseif($error): ?>
                <div class="alert alert-error"><?php echo $error; ?></div>
            <?php endif; ?>
            <form action="php/contact_form.php" method="POST" class="booking-form">
                <div class="form-group">
                    <label for="cname">Nom</label>
                    <input type="text" id="cname" name="name" required>
                </div>
                <div class="form-group">
                    <label for="cemail">Email</label>
                    <input type="email" id="cemail" name="email" required>
                </div>
                <div class="form-group">
                    <label for="cmessage">Message</label>
                    <textarea id="cmessage" name="message" required></textarea>
                </div>
                <div class="form-group">
                    <label for="captcha">Combien font <?php echo $a; ?> + <?php echo $b; ?> ?</label>
                    <input type="text" id="captcha" name="captcha" required>
                </div>
                <button type="submit" class="submit-button">Envoyer</button>
            </form>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="container">
            <h2>Questions fréquentes</h2>
            
            <div class="faq-container">
                <details>
                    <summary>Comment se déroule la première consultation ?</summary>
                    <p>La première consultation dure environ 45 minutes. Nous discutons de vos besoins, je réalise un diagnostic personnalisé et nous établissons ensemble un plan de traitement adapté.</p>
                </details>
                
                <details>
                    <summary>Les soins sont-ils remboursés ?</summary>
                    <p>Les soins esthétiques ne sont généralement pas remboursés par la Sécurité sociale. Cependant, certaines mutuelles peuvent prendre en charge une partie des soins. N'hésitez pas à vous renseigner auprès de votre mutuelle.</p>
                </details>
                
                <details>
                    <summary>Quelle est la politique d'annulation ?</summary>
                    <p>Les rendez-vous peuvent être annulés ou reportés jusqu'à 24h à l'avance. Au-delà, la consultation pourra être facturée.</p>
                </details>
                
                <details>
                    <summary>Quels sont les moyens de paiement acceptés ?</summary>
                    <p>Nous acceptons les paiements en espèces, par chèque et par carte bancaire. Le règlement s'effectue à la fin de chaque séance.</p>
                </details>
            </div>
        </div>
    </section>
<?php include "partials/footer.php"; ?>
