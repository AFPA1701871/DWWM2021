<?php

    $somme = 0;

    $nbValeurs = readline("Tapez le nombre de valeurs à saisir : ");

    for ($i=0;$i<=$nbValeurs-1;$i++){

        $valeur = readline("Tapez un nombre : ");
        $tableau[$i] = $valeur;
        $somme += $valeur;
        
    }

    echo $somme;

?>