<?php


$mail_u = $_POST['mail'];
$password = $_POST['pass'];

$dbh = new PDO('mysql:host=mysql-tltteperlecques.alwaysdata.net;dbname=tltteperlecques_securite;charset=utf8', '289448_securite', 'Securite1.');
$query = "SELECT count(*) FROM User where mail_u like '$mail_u' AND password like '$password'";
$sth = $dbh->query($query);

var_dump($query);
$res = $sth->fetchAll();
$val = $res[0];


if($val[0] == 1){

    header('Location:./accueil.php');
}else{

    header('Location:./erreur.php');
}



?>