<?php

    // Variables
    $nbSaisie = 0;
    $saisie = [];
    $boolean = true;

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

    //tri a bulle

    while($boolean){
        $boolean = false;
        for($i = 0 ; $i <count($saisie)-1 ; $i++){
            if($saisie[$i]<$saisie[$i+1]){
                $temp = $saisie[$i];
                $saisie[$i] = $saisie[$i+1];
                $saisie[$i+1] = $temp;
                $boolean = true;
            }            
        }       
    }

    //affichage du tableau apres tri
    echo "Tableau apres tri :";
    print_r($saisie);

?>