<?php

    $magnitude = readline ("Puissance de secousse : ");

    if (($magnitude>=1)&&($magnitude<=9)){
        switch($magnitude){
            case 1 : echo $magnitude." Micro tremblement de terre, non ressenti."; break;
            case 2 : echo $magnitude." Trés minieur, non ressenti, mais detecté."; break;
            case 3 : echo $magnitude." Mineur, causant rarement des dommages."; break;
            case 4 : echo $magnitude." Léger, secousses notables d'objets à l'intérieur des maisons."; break; 
            case 5 : echo $magnitude." Modéré, légers dommages aux édifices bien construits."; break;
            case 6 : echo $magnitude." Fort, Destructeur dans des zones allant jusqu'à 180 km à la ronde si elles sont peuplées."; break;
            case 7 : echo $magnitude." Majeur, Dommages modérés à sévères dans des zones plus vastes."; break;
            case 8 : echo $magnitude." Important, Dommages sérieux dans des zones de plusieurs centaines de km."; break;
            case 9 : echo $magnitude." Devastateur, dévaste des zones sur des milliers de km à la ronde"; break;
        }
    } elseif ($magnitude<1) {
        echo "Votre saisie est hors échelle.";
    } else {
        echo "Bienvenue dans l'Apocalypse!!!";
    }


?>