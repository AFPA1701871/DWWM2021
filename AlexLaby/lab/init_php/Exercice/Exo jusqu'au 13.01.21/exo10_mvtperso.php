<?php

    $mvtPerso=readLine ("6 à droite, 4 à gauche, 8 en haut, 2 en bas");

    switch ($mvtPerso) {
        case 6 :
            echo"Le personnage se déplace à droite.";
            break;
        case 4 :
            echo"Le personnage se déplace à gauche.";
            break;
        case 8 :
            echo"Le personnage se déplace en haut.";
            break;
        case 2 :
            echo"Le personnage se déplace en bas.";
            break;
        default :  
            echo "Erreur de saisie, le personnage ne bouge pas.";
            break;    
    }

?>