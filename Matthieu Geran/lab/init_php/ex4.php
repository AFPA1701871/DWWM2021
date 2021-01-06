<?php

    $nom1 = readline("Tapez un premier nom : ");
    $nom2 = readline("Tapez un deuxième nom : ");
    $nom3 = readline("Tapez un troisième nom : ");

    if ($nom1 < $nom2 and $nom2 < $nom3){
        echo "Les noms sont rangés dans l'ordre alphabétique.";
    }else{
            echo "Les noms ne sont pas rangés dans l'ordre alphabétique.";
    }

?>