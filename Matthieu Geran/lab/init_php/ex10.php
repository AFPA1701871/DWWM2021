<?php

    $valeur = readline("Tapez la valeur d'échelle : ");

    switch ($valeur) {

        case 1 :
            echo "1 - Micro tremblement de terre, non ressenti.";
        break;

        case 2 :
            echo "2 - Très mineur, non ressenti mais detecté.";
        break;

        case 3 :
            echo "3 - Mineur, causant rarement des dommages.";
        break;

        case 4 :
            echo "4 - Léger, secousses notables d'objets à l'intéreur des maisons.";
        break;

        case 5 :
            echo "5 - Modéré, légers dommages aux édifices bien construits.";
        break;

        case 6 :
            echo "6 - Fort, destructeur dans des zones allant jusqu'à 180 kilomètres à la ronde si elles sont peuplées.";
        break;

        case 7 :
            echo "7 - Majeur, dommages modérés à sévères dans des zones plus vastes.";
        break;

        case 8 :
            echo "8 - Important, dommages sérieurx dans des zones à des centaines de kilomètres à la ronde.";
        break;

        case 9 :
            echo "9 - Dévastateur, dévaste des zones sur des milliers de kilomètres à la ronde.";
        break;

        default : echo "Erreur de saisie ou apocalypse (espérons que c'est une erreur).";
    }

?>