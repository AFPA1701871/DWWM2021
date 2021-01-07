<?php
$direction=readline("quelle direction ? (appuillez sur une touche du pavez numérique) ");
switch($direction){
    case 6:
        $mouvement="à droite";
    break;
    case 4:
        $mouvement="à gauche";
    break;
    case 8:
        $mouvement="en haut";
    break;
    case 2:
        $mouvement="en bas";
    break;
    default :
        $mouvement="nul part (erreur de saisie)";
    }
echo "le personnage va ".$mouvement;
?>