<?php

    //variables
    require ("fonctions.php");

    //Demande saisie de l'utilisateur
    $saisie = readline("Votre saisie : ");
    $carAPurger = readline("Saisir le caractère à purger : ");
    

    if (trouve($saisie,$carAPurger)!=[]){
        $chaineResultat = purge($saisie,$carAPurger);
         echo $chaineResultat;
    } else {
        echo $saisie;
    }



?>