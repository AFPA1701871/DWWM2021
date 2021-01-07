<?php
    $nb1 = readline("Ecrivez un premier nombre.");
    $nb2 = readline("Ecrivez un deuxième nombre.");
    if(($nb1*$nb2)>=0){
        echo "Le produit des deux nombres est positif.";
    }
    else{
        echo "Le produit des deux nombres est négatif.";
    }
?>