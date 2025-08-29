<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $email = filter_var($_POST['email'] ?? '', FILTER_VALIDATE_EMAIL);
    $message = trim($_POST['message'] ?? '');
    $captcha = trim($_POST['captcha'] ?? '');
    
    if ($captcha != ($_SESSION['captcha_answer'] ?? '')) {
        $_SESSION['contact_error'] = 'Captcha incorrect';
    } elseif ($name && $email && $message) {
        $to = 'alg.dermalina@gmail.com';
        $subject = 'Nouveau message de contact depuis algdermalina.fr';
        $body = "Nom: $name\nEmail: $email\n\n$message";
        
        // MODIFICATION ICI : Headers améliorés avec votre domaine
        $headers = "From: ALG <noreply@algdermalina.fr>\r\n";
        $headers .= "Reply-To: " . $name . " <" . $email . ">\r\n";
        $headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
        
        // Envoi avec les nouveaux headers
        mail($to, $subject, $body, $headers);
        $_SESSION['contact_success'] = true;
    } else {
        $_SESSION['contact_error'] = 'Tous les champs sont obligatoires';
    }
    header('Location: ../contact.php#contact-form');
    exit();
}

header('Location: ../contact.php');
exit();

// Exemple d'ajout d'événement Google Calendar (à configurer plus tard)
/*
require_once '../vendor/autoload.php';
$client = new Google_Client();
$client->setApplicationName('ALG Contact');
$client->setScopes(Google_Service_Calendar::CALENDAR);
$client->setAuthConfig('../credentials.json');
$service = new Google_Service_Calendar($client);
*/
?>
