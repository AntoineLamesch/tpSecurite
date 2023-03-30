<?php

if (session_status() == PHP_SESSION_NONE) { session_start(); }

spl_autoload_register(function ($class_name) {
    include_once ('class/' . $class_name . '.class.php');
});


$mail_u = $_POST['mail'];
$password = $_POST['pass'];

$User = new User();
$res = $User->connectUser($mail_u, $password);


if(intval($res[0]['nb']) === 1){
    $_SESSION['mail_u'] = $mail_u;
    header('Location:./accueil.php');
}else{

    header('Location:./erreur.php');
}



?>