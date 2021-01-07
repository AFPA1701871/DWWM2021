<?php
    $indice=readline("saisir un nombre ");

    switch($indice){
        case -6 :
            echo "le personnage va à droite";
        break;

        case -8 :
            echo "le personnage va en haut";
        break;

        case -4 :
            echo "le personnage va à gauche";
        break;

        case -2 :
            echo "le personnage va en bas";
        break;

        default :
            echo "erreur, pas de déplacement";
    }
?>