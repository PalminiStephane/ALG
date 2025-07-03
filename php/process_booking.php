<?php
// Configuration
$to_email = "contact@algdermalina.fr";
$admin_email = "caroline.vedda@algdermalina.fr";

// Google Calendar API Configuration
// IMPORTANT: Vous devrez configurer l'API Google Calendar et obtenir les credentials
// Voir: https://developers.google.com/calendar/quickstart/php

// Récupération et validation des données du formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Sécurisation des données
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $phone = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
    $service = filter_var($_POST['service'], FILTER_SANITIZE_STRING);
    $date = filter_var($_POST['date'], FILTER_SANITIZE_STRING);
    $time = filter_var($_POST['time'], FILTER_SANITIZE_STRING);
    $message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);
    
    // Validation
    $errors = [];
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Email invalide";
    }
    
    if (empty($name) || empty($phone) || empty($service) || empty($date) || empty($time)) {
        $errors[] = "Tous les champs obligatoires doivent être remplis";
    }
    
    // Vérification de la date (pas dans le passé)
    $selected_date = strtotime($date);
    $today = strtotime(date('Y-m-d'));
    if ($selected_date < $today) {
        $errors[] = "La date sélectionnée ne peut pas être dans le passé";
    }
    
    // Si pas d'erreurs, traiter la réservation
    if (empty($errors)) {
        
        // Mappage des services
        $services_map = [
            'jet-peel' => 'Jet Peel - Soin non invasif',
            'laser' => 'Épilation Laser Médical',
            'naturopathie' => 'Accompagnement Naturopathique',
            'led' => 'Photobiomodulation LED',
            'dermopigmentation' => 'Dermopigmentation'
        ];
        
        $service_name = $services_map[$service] ?? $service;
        
        // Création du contenu de l'email
        $email_subject = "Nouvelle réservation - " . $service_name;
        
        $email_body = "
        <html>
        <head>
            <style>
                body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
                .container { max-width: 600px; margin: 0 auto; padding: 20px; }
                .header { background-color: #8B9A7B; color: white; padding: 20px; text-align: center; }
                .content { background-color: #f9f9f9; padding: 20px; margin-top: 20px; }
                .info-row { margin-bottom: 10px; }
                .label { font-weight: bold; color: #8B9A7B; }
            </style>
        </head>
        <body>
            <div class='container'>
                <div class='header'>
                    <h2>Nouvelle Réservation</h2>
                </div>
                <div class='content'>
                    <div class='info-row'>
                        <span class='label'>Nom:</span> $name
                    </div>
                    <div class='info-row'>
                        <span class='label'>Email:</span> $email
                    </div>
                    <div class='info-row'>
                        <span class='label'>Téléphone:</span> $phone
                    </div>
                    <div class='info-row'>
                        <span class='label'>Service:</span> $service_name
                    </div>
                    <div class='info-row'>
                        <span class='label'>Date:</span> " . date('d/m/Y', strtotime($date)) . "
                    </div>
                    <div class='info-row'>
                        <span class='label'>Heure:</span> $time
                    </div>
                    " . (!empty($message) ? "<div class='info-row'><span class='label'>Message:</span> $message</div>" : "") . "
                </div>
            </div>
        </body>
        </html>
        ";
        
        // Headers pour l'email HTML
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From: ALG Derma Lina <noreply@algdermalina.fr>" . "\r\n";
        
        // Envoi de l'email à l'administrateur
        $mail_sent = mail($admin_email, $email_subject, $email_body, $headers);
        
        // Email de confirmation au client
        $client_subject = "Confirmation de votre réservation - ALG Derma Lina";
        $client_body = "
        <html>
        <head>
            <style>
                body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
                .container { max-width: 600px; margin: 0 auto; padding: 20px; }
                .header { background-color: #8B9A7B; color: white; padding: 20px; text-align: center; }
                .content { background-color: #f9f9f9; padding: 20px; margin-top: 20px; }
                .button { background-color: #D4A574; color: white; padding: 10px 20px; text-decoration: none; display: inline-block; margin-top: 20px; }
            </style>
        </head>
        <body>
            <div class='container'>
                <div class='header'>
                    <h2>Confirmation de votre réservation</h2>
                </div>
                <div class='content'>
                    <p>Bonjour $name,</p>
                    <p>Nous avons bien reçu votre demande de réservation pour :</p>
                    <p><strong>Service :</strong> $service_name<br>
                    <strong>Date :</strong> " . date('d/m/Y', strtotime($date)) . "<br>
                    <strong>Heure :</strong> $time</p>
                    <p>Nous vous confirmerons votre rendez-vous dans les plus brefs délais.</p>
                    <p>Si vous avez des questions, n'hésitez pas à nous contacter au 06 35 56 58 62.</p>
                    <p>À très bientôt,<br>Caroline Vedda<br>ALG Derma Lina</p>
                </div>
            </div>
        </body>
        </html>
        ";
        
        mail($email, $client_subject, $client_body, $headers);
        
        // Intégration Google Calendar (nécessite configuration)
        // Voici un exemple de structure pour l'intégration Google Calendar
        /*
        require_once 'vendor/autoload.php';
        
        $client = new Google_Client();
        $client->setApplicationName('ALG Derma Lina Booking');
        $client->setScopes(Google_Service_Calendar::CALENDAR);
        $client->setAuthConfig('credentials.json');
        $client->setAccessType('offline');
        
        $service = new Google_Service_Calendar($client);
        
        $event = new Google_Service_Calendar_Event(array(
            'summary' => $service_name . ' - ' . $name,
            'description' => 'Client: ' . $name . '\nTél: ' . $phone . '\nEmail: ' . $email . '\n\n' . $message,
            'start' => array(
                'dateTime' => $date . 'T' . $time . ':00',
                'timeZone' => 'Europe/Paris',
            ),
            'end' => array(
                'dateTime' => $date . 'T' . date('H:i', strtotime($time . ' +1 hour')) . ':00',
                'timeZone' => 'Europe/Paris',
            ),
        ));
        
        $calendarId = 'primary';
        $event = $service->events->insert($calendarId, $event);
        */
        
        // Redirection avec message de succès
        session_start();
        $_SESSION['booking_success'] = true;
        header('Location: index.html?success=1#booking');
        exit();
        
    } else {
        // Gestion des erreurs
        session_start();
        $_SESSION['booking_errors'] = $errors;
        header('Location: index.html?error=1#booking');
        exit();
    }
    
} else {
    // Si accès direct au fichier sans formulaire
    header('Location: index.html');
    exit();
}

// Note importante pour l'intégration Google Calendar :
// 1. Installer Google Client Library : composer require google/apiclient:^2.0
// 2. Créer un projet dans Google Cloud Console
// 3. Activer Google Calendar API
// 4. Créer des credentials et télécharger credentials.json
// 5. Configurer OAuth2 et obtenir les tokens d'accès
// Documentation : https://developers.google.com/calendar/quickstart/php
?>