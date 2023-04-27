<?php


switch ($_GET['erreur']) {
    case 'nom':
        echo "Nom trop long";
        break;
    case 'prenom':
        echo "prenom trop long";
        break;
    case 'mail':
        echo "mauvais format de mail";
        break;
    case 'date_naissance':
        echo "date de naissance antérieure à celle d'aujourd'hui";
        break;
    case 'pass':
        echo "Le mot de passe doit contenire au moins une lettre majuscule, une lettre minuscule, un caractère spécial et faire au moins 6 caractères";
        break;
    default:
        echo "autre errer";
        break;
}


?>