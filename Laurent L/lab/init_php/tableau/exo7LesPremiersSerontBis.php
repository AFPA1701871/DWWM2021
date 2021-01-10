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

    //affichage du tableau avant inversion
    echo "Tableau avant inversion :";
    print_r($saisie);

    // inversion du tableau saisie dans un nouveau tableau
    $saisieInverse = array_reverse($saisie);
        
    //affichage du tableau apres inversion
    echo "Tableau apres inversion :";
    print_r($saisieInverse);

?>