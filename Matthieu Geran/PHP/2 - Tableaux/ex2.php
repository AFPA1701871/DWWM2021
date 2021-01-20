<?php

    $negatif = 0;
    $positif = 0;
    $nul = 0;

    do{

    $nbValeurs = readline("Tapez le nombre de valeurs à saisir : ");

    }while ($nbValeurs<=0 or $nbValeurs<>(intdiv($nbValeurs,1)));

    for ($i=0;$i<=$nbValeurs-1;$i++){
        $valeur = readline("Tapez un nombre : ");
        $tableau[$i] = $valeur;
        
        if ($valeur < 0){
            $negatif++;
        }

        if ($valeur > 0){
            $positif++;
        }

        if ($valeur == 0){
            $nul++;
        }

    }

    echo $positif . " valeur(s) positive(s), " . $negatif . " valeur(s) positive()s et " . $nul . " valeur(s) nulle(s).";

?>