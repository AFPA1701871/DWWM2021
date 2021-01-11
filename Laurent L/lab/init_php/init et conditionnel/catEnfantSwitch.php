<?php
    // variables
    $age = readline("Age de l'enfant : ");
    $age = intval($age); // pour que age soit un entier

    // switch case sur l'age de l'enfant
    switch($age){
        case 1:
        case 2:
        case 3:
        case 4:
        case 5:
            $cat ="hors catégorie";
            break;
        case 6 :
        case 7 :
            $cat = "poussin";
            break;
        case 8 :
        case 9 :
            $cat = "pupille";
            break;
        case 10 :
        case 11 :
            $cat = "minime";
            break;
        default :
            $cat = "cadet";
    };

    //affichage de la catégorie de l'enfant
    echo "Votre enfant est ".$cat.".";

?>