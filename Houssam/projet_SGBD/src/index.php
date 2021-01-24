<?php
    require './lib/connexion.php';
    require './lib/utile.php';
    define("BDD","..\BDD");
    define("SQL","SQL :>\n");
    define("QUIT","quit");
    define("EXTENSION",".dwwm");

    echo "\n ***  Veillez vous-connecter  *** \n \n";

    //Se connecter
    do{
    $userLogin=readline("Identifiant : ");
    if ($userLogin == "quit") {
        exit;
    }
    $userMdp=readline("Mot de passe : ");
    if ($userMdp == "quit") {
        exit;
    }
    } while(testConnexion($userLogin,$userMdp) == false);

    //Actions
    do{
        $userAction=readline(SQL);
        $userAction=strtolower($userAction);
        quit($userAction);
    } while (cta($userAction)==false)
?>              

