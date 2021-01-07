<?php

    $saisie1 = readline("saisie 1 : ");
    $saisie2 = readline("saisie 2 : ");

    echo "Avant permutation,\nsaisie 1 : ".$saisie1.", saisie 2 : ".$saisie2;

    $temp = $saisie1;
    $saisie1 = $saisie2;
    $saisie2 = $temp;
    
    echo "\nApres permutation,\nsaisie 1 : ".$saisie1.", saisie 2 : ".$saisie2;
?>