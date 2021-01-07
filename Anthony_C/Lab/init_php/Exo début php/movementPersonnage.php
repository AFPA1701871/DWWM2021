<?php
    $move=readline("Dans quelle direction voulez vous allez? ↓=2 ←=4 →=6 ↑=8 :");
    while($move!=2 and $move!=4 and $move!=6 and $move!=8){
        echo "Erreur de saisie."."\n";
        $move=readline("Dans quelle direction voulez vous allez? ↓=2 ←=4 →=6 ↑=8 :");    
    }
    switch($move){
        case 2 :
            echo "le personnage va en bas.";
            break;
        case 4 :
            echo "le personnage va à gauche.";
            break;
        case 6 :
            echo "le personnage va à droite.";
            break;
        case 8 :
            echo "le personnage va en haut.";
            break;
        default :
            echo "Erreur de saisie, le personnage ne bouge pas.";
    }
?>