<?php
echo"\n";
$saisieUser = readline("Dans quelle direction voulez-vous vous déplacer: ");
switch ($saisieUser) {
    case 6:
        echo"Le personnage va droite";
        break;
    case 4:
        echo"Le personnage va à gauche";
        break;
    case 8:
        echo"Le personnage va en haut";
        break;
    case 2:
        echo"Le personnage va en bas";
        break;
    default:
        echo"Erreur de saisie, le personnage de bouge pas";
        break;
}
?>