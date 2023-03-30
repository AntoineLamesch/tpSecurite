<?php

$dbh = new PDO('mysql:host=mysql-tltteperlecques.alwaysdata.net;dbname=tltteperlecques_securite;charset=utf8', '289448_securite', 'Securite1.');
$sth = $dbh->query('SELECT count(*)  FROM User');

$sqlQuery = "SELECT *  FROM User";
$recipesStatement = $dbh->prepare($sqlQuery);
$recipesStatement->execute();
$recipes = $recipesStatement->fetchAll();

var_dump($_POST);

// On affiche chaque recette une à une
foreach ($recipes as $recipe) {
    var_dump($recipe);
    var_dump($_POST);
}
?>