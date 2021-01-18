<?php

    require('./service/Librairie_fonc.php');
    define("SQL","SQL :>");

    //Créer le fichier config
    initConfig();

    //Pour se log
    do {
        $inputLogin=readline("Entrez votre identifiant : ");
        if($inputLogin== "quit"){
            exit;
        }
        $inputPassword=readline("Entrez votre mot de passe : ");
        if($inputPassword== "quit"){
            exit;
        }
    } while (login($inputLogin,$inputPassword)==false);

    //Après s'être logger
    do{
        $inputUser=readline(SQL);
        $inputUser=strtolower($inputUser);
        quit($inputUser);
    } while (call($inputUser)==false); 


?>