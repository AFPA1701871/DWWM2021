<?php

    $nom1 = readline("Nom 1 : ");
    $nom2 = readline("Nom 2 : ");
    $nom3 = readline("Nom 3 : "); 

    if (($nom1<$nom2)and($nom2<$nom3)) {
        echo "Les noms sont dans l'ordre croissant.";
    } else {
        echo "Les noms ne sont pas dans l'ordre croissant.";
    };

?>