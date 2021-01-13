<?php

    $ligne=0;
    $colonne=0;

    //demande où se trouve le pion sur le damier
    do{
        $ligne=readline("sur quelle ligne se trouve votre pion ? ");
    }while($ligne<1 or $ligne>10);

    do{
        $colonne=readline("sur quelle colonne se trouve votre pion ? ");
    }while($colonne<1 or $colonne>10);

    //position du pion
    for($ligne=1;$ligne>11;$ligne++){
        for($colonne=1;$colonne>11;$colonne++){
            if($ligneJeu==$ligne and $colonneJeu==$colonne){
                $jeu[$ligneJeu][$colonneJeu]="X";
            }
            else{
                $jeu[$ligneJeu][$colonneJeu]="O";

            }
        }
    }

    //affichage du damier
    echo "damier";

    //déplacement
    echo "entrer le mouvement à effectuer : \n";
    do{
        $deplace=readline("0 (haut-gauche), 1(haut-droite), 2(bas-gauche), 3(bas-droite) ");
    }while();

?>