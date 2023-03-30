<?php
// Chargez la bibliothèque SwiftMailer
require_once './vendor/autoload.php';

use OTPHP\TOTP;

class MyTOTP {
    public static function generateCode($secret, $interval = 30, $digest = 'sha1', $length = 6) {
        $totp = TOTP::create($secret, $interval, $digest, $length);
        return $totp->now();
    }

    // Ajoutez d'autres méthodes ici pour étendre ou modifier le comportement de la classe TOTP
}



$code = MyTOTP::generateCode('Antoine');

// Créez un objet de transport SMTP
$transport = (new Swift_SmtpTransport('smtp.ionos.fr', 465, 'ssl'))
  ->setUsername('contact@antoine-lamesch.fr')
  ->setPassword('Adrien29Baptiste14.@');

// Créez l'objet Mailer avec le transport SMTP
$mailer = new Swift_Mailer($transport);

// Créez l'objet Message avec les détails du mail
$message = (new Swift_Message('Sujet du mail'))
  ->setFrom(['contact@antoine-lamesch.fr' => 'Antoine Lamesch'])
  ->setTo(['antoine.lamesch@live.fr' => 'Utilisateur'])
  ->setBody('Votre code de validation est :  oui');

// Envoyez le message
$result = $mailer->send($message);
ob_start();

// Vérifiez si le mail a été envoyé avec succès
if ($result) {
  echo 'Le mail a été envoyé avec succès';
} else {
  echo 'Une erreur est survenue lors de l\'envoi du mail';
}

require './index.php';
ob_end_flush()

?>