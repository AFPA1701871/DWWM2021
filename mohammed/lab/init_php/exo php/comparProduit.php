<?php
$nombre1 = readline( " entrez nombre 1  ");  
$nombre2 = readline( " entrez nombre 2  ");
$singne=$nombre1*$nombre2;
     if (($singne) > 0) {    // calcul du singe  produit
        echo " le calcul est positif";
    }
     elseif (($singne) < 0) {
    echo " le calcul est negative";
    }
    else 
    echo " nulle"
?>