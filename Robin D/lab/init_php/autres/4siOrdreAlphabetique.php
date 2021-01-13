<?php
    $nom1=readline("Ecrivez une nom: ");
    $nom2=readline("Ecrivez une nom: ");
    $nom3=readline("Ecrivez une nom: ");

    if ($nom1<$nom2 and $nom2<$nom3) {
        echo "les noms sont rangés dans l'ordre alphabétique";
    }
    else {
        echo "les noms ne sont pas rangés dans l'ordre alphabétique";
    }
?>