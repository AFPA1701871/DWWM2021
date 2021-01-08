<?php
$deplacement= readline("indiquer 2 OU 4 OU 6 OU 8 pour deplacer votre perso");

switch ($deplacement) {
    case 2 : 
        echo "le personnage va en bas";
        break;
    case 4 : 
        echo "le personnage va en gauche"; 
        break;
    case 6 : 
        echo "le personnage va a droite";
        break;
    case 8 : 
        echo "le personnage va a haut";
        break;
    default :
        echo "le personnage de ne bouge pas ";
    }
?>