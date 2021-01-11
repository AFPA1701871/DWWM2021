<?php

    $croix = "*";
    $symbole = [];
    $bouclage = 10;

    //affichage croissant
    for ($i=1 ; $i<=$bouclage ; $i++){
        $symbole[$i] = $croix;      
        for ($j = 1; $j <= count($symbole) ; $j++){
            echo $symbole[$j];
        }
        echo "\n";      //saut de ligne impératif
    }

    //affichage décroissant
    for ($i = $bouclage-1 ; $i >= 1 ; $i--){
        $symbole = [];   // a reinitialiser a chaque passage diminuer la taille du tableau
        for($j = 1 ; $j <= $i ; $j++){
            $symbole[$j]=$croix;
        }
        for ($k = 1; $k <= count($symbole) ; $k++){ // bouclage pour affichage des elements de l'array
            echo $symbole[$k];
        }
        echo "\n";      //saut de ligne impératif
    }
    
?>