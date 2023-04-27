<?php

if (!empty($_POST['nom'] && $_POST['prenom'] && $_POST['mail'] && $_POST['date_naissance'] && $_POST['pass'])) {



    if (strlen($_POST['nom']) <= 15) { //On vérifie que le nom est inférieur ou égal à 15 caractères, c'est à dire le nombre de caractères du nom de famille le plus logn de France

        $nom_u = $_POST['nom'];
    } else {
        header('Location:./erreur.php?erreur=nom');
        exit();
    }

    if (strlen($_POST['prenom']) <= 13) { //On vérifie que le prénom est inférieur ou égal à 13 caractères, c'est à dire le nombre de caractères du prénom le plus long de France

        $prenom_u = $_POST['prenom'];
    } else {
        header('Location:./erreur.php?erreur=prenom');
        exit();
    }

    if (filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) { //On vérifie si le mail est bien construit

        $mail_u = $_POST['mail'];
    } else {
        header('Location:./erreur.php');
        exit();
    }

    if (new DateTime($_POST['date_naissance']) < new DateTime()) { //On vérifie si la date de naissance est bien antérieure à la date d'ujourd'hui

        $dat_n_u = $_POST['date_naissance'];
    } else {
        header('Location:./erreur.php?erreur=date_naissance');
        exit();
    }

    if (preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@!%*?&])[A-Za-z\d$@!%*?&]{6,}$/', $_POST['pass'])) { //On vérifie grâçe à une expression régulière que le mot de passe contient au moins une lettre minuscule, une lettre majuscule, un chiffre et un caractère spécial, et qu'il fait au moins 6 caractères

        $password = hash('gost', $_POST['pass']); // La variable password contiendra la version hachée du mot de passe fournis par l'utilisateur

    } else {
        header('Location:./erreur.php?erreur=pass');
        exit();
    }


    $dbh = new PDO('mysql:host=mysql-tltteperlecques.alwaysdata.net;dbname=tltteperlecques_securite;charset=utf8', '289448_securite', 'Securite1.');
    $query = "INSERT INTO User (`nom_u`, `prenom_u`, `mail_u`, `dat_n_u`, `password`) VALUES ('$nom_u','$prenom_u','$mail_u','$dat_n_u', '$password');";
    $sth = $dbh->query($query);

    header('Location:./index.php');

} else {

    header('Location:./erreur.php');
}


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