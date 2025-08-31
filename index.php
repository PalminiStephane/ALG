<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="ALG Derma Lina - Soins technico-esthétiques médicaux à Ensuès-la-Redonne. Jet Peel, épilation laser, dermopigmentation et accompagnement naturopathique par Caroline Vedda.">
    <meta name="keywords" content="soins esthétiques médicaux, jet peel, épilation laser, dermopigmentation, naturopathie, Marseille">
    <title>ALG Derma Lina - Soins Technico-Esthétiques Médicaux | Accueil</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
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
                <a href="tel:+33635565862" class="btn-primary">Réserver une consultation</a>
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
        <div class="text-center mt-3">
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
        <a href="tel:+33635565862" class="btn-primary">Réserver maintenant</a>
    </section>

    <!-- Footer -->
<?php include "partials/footer.php"; ?>
</body>
</html>