<?php

// Chargez la bibliothèque SwiftMailer
require_once './vendor/autoload.php';


class OTP
{
    public function set__()
    {


    }

    public function get__()
    {


    }

    public function destruct__()
    {


    }

    public function sendOTP($email)
    {

        


        $myTotp = new MyTOTP();
        $code = $myTotp->generateCode('Antoine');
        session_start();
        $_SESSION['otp'] = $code;

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
            ->setBody('Votre code de validation est :'.$code);

        // Envoyez le message
        $result = $mailer->send($message);
        ob_start();

        // Vérifiez si le mail a été envoyé avec succès
        if ($result) {
            return 'Le mail a été envoyé avec succès';
        } else {
            return 'Une erreur est survenue lors de l\'envoi du mail';
        }




    }
}





?>