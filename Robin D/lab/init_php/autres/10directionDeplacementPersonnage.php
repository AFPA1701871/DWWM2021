<?php
    $dirDeplacementPerso=readline("utiliser la flêche directionelle du pavé numérique pour indiquer la direction du déplacement du personnage !");
    
    switch ($dirDeplacementPerso) {
        case '6':
            echo "le personnage va à droite";
            break;
        case '4':
            echo "le personnage va à gauche";
            break;
        case '8':
            echo "le personnage va en haut";
            break;
        case '2':
            echo "le personnage va en bas";
            break;
        default:
            echo "le personnage ne bouge pas !";
            break;
    }
?>