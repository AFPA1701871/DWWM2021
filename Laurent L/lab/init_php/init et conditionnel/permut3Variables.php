<?php
    $saisie1 = readline("saisie 1 : ");
    $saisie2 = readline("saisie 2 : ");
    $saisie3 = readline("saisie 3 : ");

    echo "Avant permutation,\nsaisie 1 : ".$saisie1.", saisie 2 : ".$saisie2.", saisie 3 : ".$saisie3;

    $temp = $saisie3;
    $saisie3 = $saisie2;
    $saisie2 = $saisie1;
    $saisie1 = $temp;

    echo "\nAprés permutation,\nsaisie 1 : ".$saisie1.", saisie 2 : ".$saisie2.", saisie 3 : ".$saisie3;    
?>
