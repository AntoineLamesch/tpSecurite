<?php

if (session_status() == PHP_SESSION_NONE) { session_start(); }


include_once ('class/BDD.class.php');
include_once ('class/MyTOTP.class.php');
include_once ('class/Otp.class.php');
include_once ('class/User.class.php');



require_once './vendor/autoload.php';

$secret = "Antoine";
$code = $_POST['code'];

$myTOTP = new MyTOTP();

if($myTOTP->verifyOTP($secret, $code)){
    echo "code bon";
    header('location:./accueil.php');
}else{
    echo "mauvais code";
}












?>