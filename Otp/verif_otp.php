<?php



if (session_status() == PHP_SESSION_NONE) { session_start(); }

spl_autoload_register(function ($class_name) {
    include_once ('class/' . $class_name . '.class.php');
});


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
    Log::directlyWriteLog("./logs/LogConnexion.txt", $_SESSION['mail'],"Connexxion réussie pour",$_POST['code']);
    header('location:./accueil.php');
    
}else{
    echo "mauvais code";
    Log::directlyWriteLog("./logs/LogConnexion.txt", $_SESSION['mail'],"Connexxion échouée pour",$_POST['code']);
}












?>