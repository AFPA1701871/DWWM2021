<?php

    $nombre1 = readline("Tapez un premier nombre : ");
    $nombre2 = readline("Tapez un deuxième nombre : ");

    $produit=$nombre1 * $nombre2;

    if ($produit > 0){
        echo "Le produit est positif.";
    }else if ($produit==0){
        echo "Le produit vaut zéro";
        }else{
            echo "Le produit est négatif.";    
        }

?>