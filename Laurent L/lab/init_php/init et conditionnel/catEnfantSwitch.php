<?php
    $age = readline("Age de l'enfant : ");
    $age = intval($age);
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

    echo "Votre enfant est ".$cat.".";

?>