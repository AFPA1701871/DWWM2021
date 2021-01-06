<?php

    $nombre = readline("Tapez un nombre : ");

    if ($nombre > 0){
        echo "Le nombre est positif.";
    }else if ($nombre==0){
        echo "Le nombre vaut zéro";
        }else{
            echo "Le nombre est négatif.";    
        }

?>