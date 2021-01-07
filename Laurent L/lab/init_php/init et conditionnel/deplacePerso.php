<?php

    $deplace = readline("Saisir votre déplacement : ");

    switch ($deplace){
        case 2 : 
            echo "Le personnage va en bas.";
            break;
        case 4 :
            echo "Le personnage va à gauche.";
            break;
        case 6 :
            echo "Le personnage va à droite.";
            break;
        case 8 :
            echo "Le personnage va en haut.";
            break;
        default:
            echo "Erreur de saisie, le personnage ne bouge pas.";
    }

?>