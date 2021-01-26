<?php

    require('./Lib/fonctions.php');
    define("SQL","SQL :>");

    do {
        $login=readline("Identifiant : ");
        if($login==true){
            echo "Login Ok \n";
        }
        elseif($login== "quit"){
            exit;
        }
        $password=readline("Mot de passe : ");
        if($password== true){
            echo "MDP Ok";
        }
        elseif($password== "quit"){
            exit;
        }
    } while (Verifier($login,$password));

    do{
        $inputUser=readline(SQL);
        quit($inputUser);
    } while (call($function)==0);                                                                                                                                                                                                                                                                                                                                                                                                  
?>