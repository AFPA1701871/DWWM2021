<?php
    //initialisation des variables
    $saisie1 = readline("Saisir nombre 1 : ");
    $saisie2 = readline("Saisir nombre 2 : ");

    //conditionnelle déterminant le signe du produit selon le signe des
    //variables sans calcul
    if (($saisie1 == 0) or ($saisie2 == 0)) {
        echo "Le produit est nul.";
    } else if (($saisie1<0)xor($saisie2<0)) {
            echo "Le produit est negatif.";
    } else {
            echo "Le produit est positif.";
    };


?>