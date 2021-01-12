<?php

    $nbValeurs = readline("Tapez le nombre de valeurs à saisir : ");

    for ($i=0;$i<=$nbValeurs-1;$i++){

        $valeur = readline("Tapez un nombre : ");
        $tableau[$i] = $valeur;
        
    }

    $somme = array_sum($tableau);
    echo $somme;

?>