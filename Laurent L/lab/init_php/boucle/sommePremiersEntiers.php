<?php

    $entier = readline("Entrez un nombre : ");
    $entier = intval($entier);
    $resultat = 0;

    for ($i = 1 ; $i <= $entier ; $i++){
        $resultat = $resultat+$i;
    }
    echo "Le resultat de la somme des entiers est : ", $resultat;
?>