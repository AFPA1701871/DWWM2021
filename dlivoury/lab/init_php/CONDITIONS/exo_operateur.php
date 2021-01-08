<?php
    $nombre1=readline("saisir un premier nombre: ");
    $nombre2=readline("saisir un deuxime nombre: ");
    $operateur=readline("saisir un operateur: ");

    switch($operateur){
        case "*" :
            $resultat=($nombre1*$nombre2);
        break;
        case "/" :
            $resultat=($nombre1/$nombre2);
        break;
        case "-":
            $resultat=($nombre1-$nombre2);
        break;
        case "+":
            $resultat=($nombre1+$nombre2);
        break;
        default: 
            echo"operateur non valide";
    }
    echo "le resultat est $resultat";