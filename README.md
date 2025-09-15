# ALG Derma Lina - Site Web

Site vitrine professionnel pour ALG Derma Lina, centre de soins technico-esthétiques médicaux à Ensues la Redonne, dirigé par Caroline Vedda, infirmière spécialisée.

![ALG Derma Lina Logo](https://img.shields.io/badge/ALG-Derma%20Lina-8B9A7B?style=for-the-badge&logo=data:image/svg+xml;base64,PHN2ZyB2aWV3Qm94PSIwIDAgMTAwIDEwMCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBkPSJNMjAgNTBDMjAgNDUsMTUgMzAsMTUgMjBDMTUgMTAsMjAgNSwzMCA1QzQwIDUsNDUgMTAsNDUgMjBDNDUgMzAsNDAgNDUsNDAgNTBMMzcgNTBMMzUgNDVMMjUgNDVMMjMgNTBMMjAgNTBaTTMwIDIwTDI3IDM1TDMzIDM1TDMwIDIwWiIgZmlsbD0iIzhCOUE3QiIvPjwvc3ZnPg==)

## 🌸 À propos

ALG Derma Lina propose une gamme complète de soins technico-esthétiques médicaux innovants :
- Jet Peel (soin non invasif)
- Épilation laser
- Dermopigmentation
- Photobiomodulation LED
- Accompagnement naturopathique
- Accompagnement à la parentalité

## 🚀 Fonctionnalités

- ✅ Site web responsive (mobile, tablette, desktop)
- ✅ Design moderne et épuré
- ✅ Système de réservation en ligne
- ✅ Formulaire de contact avec envoi d'emails automatiques
- ✅ Animations fluides et interactions utilisateur
- ✅ SEO optimisé
- ✅ Navigation intuitive multi-pages
- ✅ Intégration prête pour Google Calendar API

## 🛠️ Technologies utilisées

- **Frontend**
  - HTML5
  - CSS3 (avec variables CSS et animations)
  - JavaScript vanilla (ES6+)
  - Design responsive avec CSS Grid et Flexbox

- **Backend**
  - PHP 7.4+
  - Système d'envoi d'emails

- **Design**
  - Logo personnalisé en SVG
  - Palette de couleurs : Vert sauge (#8B9A7B), Rose poudré (#E8DDD4), Or doux (#D4A574)
  - Typographie : Helvetica Neue

## 📁 Structure du projet

```
alg-derma-lina/
│
├── index.html              # Page d'accueil
├── services.html           # Page des services détaillés
├── about.html              # Page à propos
├── tarifs.html             # Page des tarifs
├── blog.html               # Page blog/actualités
├── contact.html            # Page contact et réservation
│
├── css/
│   └── style.css          # Styles CSS communs
│
├── js/
│   └── main.js            # JavaScript principal
│
├── php/
│   └── process_booking.php # Traitement des réservations
│
├── images/                 # Dossier pour les images
│   └── logo.svg           # Logo ALG Derma Lina
│
└── README.md              # Ce fichier
```

## 🚦 Installation

1. **Cloner le repository**
   ```bash
   git clone https://github.com/[votre-username]/alg-derma-lina.git
   cd alg-derma-lina
   ```

2. **Configuration du serveur**
   - Serveur web avec support PHP (Apache, Nginx)
   - PHP 7.4 ou supérieur
   - Module mail PHP activé

3. **Configuration email**
   - Modifier les adresses email dans `process_booking.php`
   - Configurer SMTP si nécessaire

4. **Lancement**
   - Placer les fichiers dans le répertoire web
   - Accéder au site via votre navigateur

## ⚙️ Configuration

### Configuration des emails
Dans `process_booking.php`, modifier :
```php
$to_email = "contact@algdermalina.fr";
$admin_email = "caroline.vedda@algdermalina.fr";
```

### Intégration Google Calendar (optionnelle)
1. Créer un projet dans Google Cloud Console
2. Activer l'API Google Calendar
3. Générer les credentials
4. Suivre les instructions dans `process_booking.php`

## 📱 Responsive Design

Le site est optimisé pour :
- 📱 Mobile : 320px - 768px
- 📱 Tablette : 768px - 1024px
- 💻 Desktop : 1024px+

## 🎨 Charte graphique

### Couleurs principales
- Primaire : `#8B9A7B` (Vert sauge)
- Secondaire : `#E8DDD4` (Rose poudré)
- Accent : `#D4A574` (Or doux)
- Texte foncé : `#2C3E2C`
- Fond clair : `#FAF9F7`

### Typographie
- Titres : Helvetica Neue Light
- Corps de texte : Helvetica Neue Regular
- Espacement des lettres augmenté pour l'élégance

## 🔍 SEO

- Meta tags optimisés
- Structure sémantique HTML5
- URLs lisibles
- Sitemap XML (à ajouter)
- Schema.org markup (à implémenter)

## 📈 Améliorations futures

- [ ] Ajouter les vraies photos des services
- [ ] Intégrer Google Maps
- [ ] Système de blog avec CMS
- [ ] Newsletter avec gestion des abonnés
- [ ] Galerie avant/après
- [ ] Module de paiement en ligne
- [ ] Espace client personnalisé
- [ ] Multi-langue (FR/EN)
- [ ] Progressive Web App (PWA)

## 🤝 Contact

**ALG Derma Lina**
- 📞 06 35 56 58 62
- 📧 contact@algdermalina.fr
- 📍 Ensues la Redonne, Provence-Alpes-Côte d'Azur

## 📄 Licence

© 2024 ALG Derma Lina. Tous droits réservés.

---

Développé avec ❤️ pour ALG Derma Lina