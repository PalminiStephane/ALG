<?php
echo "<h3>Test d'envoi d'email depuis algdermalina.fr</h3>";

// Test basique
$result = mail("palministephane@gmail.com", "Test mail() ALG", "Hello depuis PHP mail()");
echo "Résultat de l'envoi : ";
var_dump($result);

// Test avec headers améliorés
echo "<br><br><strong>Test avec headers améliorés :</strong><br>";
$headers = "From: ALG <noreply@algdermalina.fr>\r\n";
$headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

$result2 = mail("palministephane@gmail.com", "Test ALG avec headers", "Test avec headers depuis algdermalina.fr", $headers);
echo "Résultat avec headers : ";
var_dump($result2);

// Infos système
echo "<br><br><strong>Configuration système :</strong><br>";
echo "sendmail_path: " . ini_get('sendmail_path') . "<br>";
echo "Server: " . $_SERVER['HTTP_HOST'] . "<br>";
echo "PHP Version: " . phpversion() . "<br>";

// Test sendmail depuis la ligne de commande
echo "<br><strong>Pour tester sendmail en ligne de commande :</strong><br>";
echo "echo 'Test' | mail -s 'Test CLI' palministephane@gmail.com";
?>
