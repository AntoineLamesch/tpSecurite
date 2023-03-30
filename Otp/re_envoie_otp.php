<?php

if (session_status() == PHP_SESSION_NONE) { session_start(); }


include_once ('class/BDD.class.php');
include_once ('class/MyTOTP.class.php');
include_once ('class/Otp.class.php');
include_once ('class/User.class.php');



require_once './vendor/autoload.php';




$mail_u = $_POST['mail'];

$User = new User();
$res = $User->connectUserMail($mail_u);


if(intval($res[0]['nb']) === 1){
   $valOTP = new OTP();
   $valOTP ->sendOTP($mail_u);
   header('Location:./form_verif_otp.php');
}else{

    header('Location:./erreur.php');
}
