<?php

$nom_u = $_POST['nom'];
$prenom_u = $_POST['prenom'];
$mail_u = $_POST['mail'];
$age_u =  $_POST['age'];
$password = $_POST['pass'];

$dbh = new PDO('mysql:host=mysql-tltteperlecques.alwaysdata.net;dbname=tltteperlecques_securite;charset=utf8', '289448_securite', 'Securite1.');
$query = "INSERT INTO User (`nom_u`, `prenom_u`, `mail_u`, `age_u`, `password`) VALUES ('$nom_u','$prenom_u','$mail_u','$age_u','$password');";
$sth = $dbh->query($query);

var_dump($query);
var_dump($nom_u);

/*$sqlQuery = "SELECT *  FROM User";
$recipesStatement = $dbh->prepare($sqlQuery);
$recipesStatement->execute();
$recipes = $recipesStatement->fetchAll();

var_dump($_POST);

// On affiche chaque recette une à une
foreach ($recipes as $recipe) {
    var_dump($recipe);
    var_dump($_POST);
}*/


?>