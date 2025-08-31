<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Contactez ALG Derma Lina pour réserver votre consultation. Caroline Vedda, infirmière spécialisée en soins technico-esthétiques à Ensuès-la-Redonne.">
    <title>Contact & Réservation - ALG Derma Lina</title>
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    
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
                            <p class="text-small">Disponible du lundi au vendredi</p>
                        </div>
                    </div>

                    <div class="info-item">
                        <div class="icon">📧</div>
                        <div>
                            <h3>Email</h3>
                            <p><a href="mailto:alg.dermalina@gmail.com">alg.dermalina@gmail.com</a></p>
                            <p class="text-small">Réponse sous 24-48h</p>
                        </div>
                    </div>

                    <div class="info-item">
                        <div class="icon">📍</div>
                        <div>
                            <h3>Adresse</h3>
                            <p><a href="https://www.google.com/maps?q=11A+Av.+de+la+Vierge+13820+Ensu%C3%A8s-la-Redonne" target="_blank" rel="noopener">Espace Santé <br>11A Av. de la Vierge <br>13820 Ensuès-la-Redonne</a></p>
                            <p class="text-small">L'entrée se trouve à gauche<br> du batiment au 1er étage<br> Parking derrière le labo / kiné</p>
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
                
                <p class="text-center-muted">
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
