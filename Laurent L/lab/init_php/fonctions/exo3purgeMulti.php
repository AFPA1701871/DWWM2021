<?php
    //variables
    require ("fonctions.php");

    //Demande saisie de l'utilisateur
    $saisie = readline("Votre saisie : ");
    $carAPurger = readline("Saisir le caractère à purger : ");        

    echo purger($carAPurger, $saisie);


?>