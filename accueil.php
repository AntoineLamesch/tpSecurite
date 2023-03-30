<?php

var_dump($_POST['username'], $_POST['pass']);
$db = new PDO('mysql:host=mysql-tltteperlecques.alwaysdata.net;dbname=tltteperlecques_securite;charset=utf8', '289448_securite', 'Securite1.');
$sql = "Insert into Message (contenue_message) values ('".$val."');";
$db->query($sql);


?>