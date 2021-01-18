<?php

    $line=readline("Donner l'âge de l'enfant");

    switch ($line) {
        case 1 : case 2 : case 3 : case 4 : case 5 :
            echo"Trop jeune";
            break;
        case 6 : case 7 :
            echo"Poussin";
            break;
        case 8 : case 9 :
            echo"Pupille";
            break;
        case 10 : case 11 :
            echo"Minime";
            break;
        case 12 : case 13 :
            echo"Cadet";
            break;
        default :
            echo "Cadet";
            break;
    }

?>
