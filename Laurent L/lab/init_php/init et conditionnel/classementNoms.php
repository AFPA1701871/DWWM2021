<?php
    // initialisation des noms 
    $nom1 = readline("Nom 1 : ");
    $nom2 = readline("Nom 2 : ");
    $nom3 = readline("Nom 3 : "); 

    // verification de l'ordre de saisie des noms et afficahge selon le cas
    if (($nom1<$nom2)and($nom2<$nom3)) {
        echo "Les noms sont dans l'ordre croissant.";
    } else {
        echo "Les noms ne sont pas dans l'ordre croissant.";
    };

?>