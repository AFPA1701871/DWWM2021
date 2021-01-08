<?php
    $nom1=readline("Ecrivez une nom: ");
    $nom2=readline("Ecrivez une nom: ");
    $nom3=readline("Ecrivez une nom: ");

    (($nom1<$nom2 and $nom2<$nom3) ? $reponse="les noms sont rangés dans l'ordre alphabétique" : $reponse="les noms ne sont pas rangés dans l'ordre alphabétique");
    
    echo "$reponse"
?>