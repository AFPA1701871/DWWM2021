<?php

    $intEchelle = readline("Saisir touche (6 pour droite / 4 pour gauche / 8 pour haut / 2 pour bas");
    $strMsg ="";
    switch($intEchelle){
        case 6 :
            $strMsg = $intEchelle . " : le personnage va a droite";
            break;
        case 4 :
            $strMsg = $intEchelle ." : le personnage va a gauche";
            break;
        case 8 :
            $strMsg = $intEchelle ." : le personnage va en haut";
            break;
        case 2 :
            $strMsg = $intEchelle ." : le personnage va en bas ";
            break;
        default:
            $strMsg = "erreur saisie, le personnage bouge pas";
            break;
    }

    echo $strMsg."\n";

?>