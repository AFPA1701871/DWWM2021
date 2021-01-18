<?php

    $echelle=readline("entrer la valeur de l'échelle ");

    if($echelle>9){
        echo "apocalypse";
    }
    else{
        switch($echelle){
            case 1:
                echo "micro tremblements, non ressenti";
            break;

            case 2:
                echo "très mineur, non ressenti mais détecté";
            break;

            case 3:
                echo "mineur, causant rarement des dégats";
            break;

            case 4:
                echo "léger, secousses notables d'objets à l'intérieur des maisons";
            break;

            case 5:
                echo "modéré, légers dommages aux eddifices bien construits";
            break;

            case 6:
                echo "fort, destructeur dans les zones allant jusqu'à 180 kilomètres";
            break;

            case 8:
                echo "important, dommages sérieux dans les zones à des centaines de kilomètres";
            break;

            case 7:
                echo "majeur, dommages modérés à sévères dans des zones plus vastes";
            break;

            case 9:
                echo "dévastateur, dévaste des zones sur des milliers de kilomètres";
            break;

            default :
                echo "saisie invalide";
        }
    }
    
?>