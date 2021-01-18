<?php

    // Variables
    $nbSaisie = 0;
    $saisie = [];

    // nombre de saisies et creation du tableau
    while (($nbSaisie<=0) or (intdiv($nbSaisie, 1) != $nbSaisie)){
        $nbSaisie = readline("Nombre de saisie(s) : ");
    }
    for($i = 0 ; $i < $nbSaisie ; $i++){
        $saisie[$i] = readline("Votre saisie : ");
    }

    //affichage du tableau avant tri
    echo "Tableau avant tri :";
    print_r($saisie);

    // tri decroissant avec fonction rsort
    rsort($saisie);

    //affichage du tableau apres tri
    echo "Tableau apres tri :";
    print_r($saisie);


?>