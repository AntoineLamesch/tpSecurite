<?php

class User{


    public function set__(){


    }

    public function get__(){

        
    }

    public function destruct__(){


    }

    public function connectUser($email, $password){

        $tableau_ini= parse_ini_file('./ini/info.ini');
        $bdd=new BDD($tableau_ini['Server'],$tableau_ini['DBName'],$tableau_ini['User'],$tableau_ini['Mdp']);
        $res = $bdd->selectQuery("Select count(*) as nb from User where mail_u like ? and password like ?;", [$email,  $password]);
        return $res;
    }

    public function disconnectUser($userId){

        unset($_SESSION['mail']);
    }




}





?>