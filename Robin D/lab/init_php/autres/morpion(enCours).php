<?php
// hg signifie en haut à gauche
// hc signifie en haut au centre
// hd signifie en haut à droite
// mg signifie au milieu à gauche
// mc signifie au milieu au centre
// md signifie au milieu à droite
// bg signifie en bas à gauche
// bc signifie en bas au centre
// bd signifie en bas à droite

    $hg="x";
    $hc="x";
    $hd="x";
    $mg="";
    $mc="";
    $md="";
    $bg="";
    $bc="";
    $bd="";

    if ($hg=="x" and $hc=="x" and $hd=="x") {
        echo "morpion pour le joueur x";
    }
    else if ($mg=="x" and $mc=="x" and $md=="x") {
        echo "morpion pour le joueur x";
    }
    else if ($bg=="x" and $bc=="x" and $bd=="x") {
        echo "morpion pour le joueur x";
    }
    else if ($hg=="x" and $mg=="x" and $bg=="x") {
        echo "morpion pour le joueur x";
    }
    else if ($hc=="x" and $mc=="x" and $bc=="x") {
        echo "morpion pour le joueur x";
    }
    else if ($hd=="x" and $md=="x" and $bd=="x") {
        echo "morpion pour le joueur x";
    }
    else if ($hg=="x" and $mc=="x" and $bd=="x") {
        echo "morpion pour le joueur x";
    }
    else if ($hd=="x" and $hc=="x" and $bg=="x") {
        echo "morpion pour le joueur x";
    }
    else {
        echo "pas de morpion pour l'instant";
    }
?>