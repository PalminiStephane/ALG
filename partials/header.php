<header>
    <nav>
        <a href="index.php" class="logo">
            <img src="./images/logo/ALG5.png" alt="ALG Logo">
        </a>
        <ul class="nav-links">
            <li><a href="index.php">Accueil</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="about.php">À propos</a></li>
            <li><a href="tarifs.php">Tarifs</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="https://www.planity.com/alg-dermalina-13820-ensues-la-redonne" class="cta-button">Prendre RDV</a></li>
        </ul>
        <button class="mobile-menu-toggle" aria-label="Menu">☰</button>
    </nav>
</header>

<!-- Ensure the mobile menu toggle stays above the navigation drawer -->
<style>
    .nav-links {
        z-index: 1000;
    }

    .mobile-menu-toggle {
        position: relative;
        z-index: 1001;
    }
</style>
