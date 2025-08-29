<?php
session_start();

// Importer PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $email = filter_var($_POST['email'] ?? '', FILTER_VALIDATE_EMAIL);
    $message = trim($_POST['message'] ?? '');
    $captcha = trim($_POST['captcha'] ?? '');
    
    if ($captcha != ($_SESSION['captcha_answer'] ?? '')) {
        $_SESSION['contact_error'] = 'Captcha incorrect';
    } elseif ($name && $email && $message) {
        
        // Configuration PHPMailer
        $mail = new PHPMailer(true);

        try {
            // Configuration SMTP Gmail (vous pouvez changer pour OVH)
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'alg.dermalina@gmail.com'; // Votre email Gmail
            $mail->Password   = 'votre_mot_de_passe_application'; // Mot de passe d'application Gmail
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = 587;

            // Configuration de l'email
            $mail->setFrom('alg.dermalina@gmail.com', 'ALG Dermalina');
            $mail->addAddress('alg.dermalina@gmail.com', 'ALG Contact');
            $mail->addReplyTo($email, $name);

            // Contenu de l'email
            $mail->isHTML(false);
            $mail->Subject = 'Nouveau message de contact depuis algdermalina.fr';
            $mail->Body    = "Nouveau message de contact reçu :\n\n";
            $mail->Body   .= "Nom: " . $name . "\n";
            $mail->Body   .= "Email: " . $email . "\n\n";
            $mail->Body   .= "Message:\n" . $message . "\n\n";
            $mail->Body   .= "---\n";
            $mail->Body   .= "Envoyé le : " . date('d/m/Y à H:i:s') . "\n";
            $mail->Body   .= "IP: " . $_SERVER['REMOTE_ADDR'] . "\n";

            $mail->send();
            $_SESSION['contact_success'] = true;
            
        } catch (Exception $e) {
            $_SESSION['contact_error'] = 'Erreur lors de l\'envoi: ' . $mail->ErrorInfo;
        }
        
    } else {
        $_SESSION['contact_error'] = 'Tous les champs sont obligatoires';
    }
    header('Location: ../contact.php#contact-form');
    exit();
}

header('Location: ../contact.php');
exit();
?>