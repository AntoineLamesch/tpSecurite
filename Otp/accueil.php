<?php

if (session_status() == PHP_SESSION_NONE) { session_start(); }

spl_autoload_register(function ($class_name) {
    include_once ('class/' . $class_name . '.class.php');
});

$usr = new User();

$userInfo = $usr->getUserInfos($_SESSION['mail_u']);

$nom_u = $userInfo[0]['nom_u'];
//$nom_u = htmlspecialchars($userInfo[0]['nom_u']); Décommentez cette ligne pour enelever l'alerte
$prenom_u = $userInfo[0]['prenom_u'];

echo"Wouhou vous êtes connecté !!!! ";
echo $nom_u;


?>