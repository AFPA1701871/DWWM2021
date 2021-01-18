<?php

    // Variables
    $nbSaisie = 0;
    $saisie = [];
    $saisieInverse = [];    

    // nombre de saisies et creation du tableau
    while (($nbSaisie<=0) or (intdiv($nbSaisie, 1) != $nbSaisie)){
        $nbSaisie = readline("Nombre de saisie(s) : ");
    }
    for($i = 0 ; $i < $nbSaisie ; $i++){
        $saisie[$i] = readline("Votre saisie : ");
    }

    //affichage du tableau avant inversion
    echo "Tableau avant inversion :";
    print_r($saisie);

    // inversion du tableau saisie dans un nouveau tableau
    for ($i = 0 ; $i<count($saisie) ; $i++){
        $saisieInverse[$i] = $saisie[(count($saisie)-1-$i)];
    } 
    $saisie = $saisieInverse;   
        
    //affichage du tableau apres inversion
    echo "Tableau apres inversion :";
    print_r($saisie);

?>