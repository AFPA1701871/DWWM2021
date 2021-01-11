<?php

    $valeur=[];
    $negatif = 0;
    $positif = 0;
    $nbreDeSaisie = 0;

    while (($nbreDeSaisie<=0) or (intdiv($nbreDeSaisie,1) != $nbreDeSaisie)){
        $nbreDeSaisie = readline("Nombre de saisie(s) : ");  
    }

    for ($i = 0 ; $i < $nbreDeSaisie ; $i++){
        $valeur[$i] = readline("Votre saisie : ");
        if ($valeur[$i]<0){
            $negatif++;
        } else if ($valeur[$i]>0){
            $positif++;
        }
    }

    echo "Le tableau contient ".$positif." valeur(s) positive(s) et ".$negatif." négative(s).";
    
?>