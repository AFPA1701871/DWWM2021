<?php

    //créer damier
    for($i=0;$i<10,$i++){
        for($j=0;$j<10;$j++){
            $jeu[$i][$j]="O ";
        }
    }

    //affichage
    echo "damier vide :";
    for($i=0;$i<10;$i++){
        echo "\n";
        for($j=0;$j<10;$j++){
            echo $jeu[$i][$j];
        }
    }

    //demande où se trouve le pion sur le damier
    echo "\n";
    do{
        $lignee=readline("sur quelle lignee se trouve votre pion ? ");
    }while($lignee<0 or $lignee>9);

    do{
        $colonne=readline("sur quelle colonne se trouve votre pion ? ");
    }while($colonne<0 or $colonne>9);

    $jeu[$ligne-1][$colonne-1]="X ";
    echo "position du pion :";
    for($i=0;$i<10;$i++){
        echo "\n";
        for($j=0;$j<10;$j++){
            echo $jeu[i][j];
        }
    }

    //déplacement
    do{
        echo "entrer le mouvement à effectuer : \n";
        $deplace=readline("0 (haut-gauche), 1(haut-droite), 2(bas-gauche), 3(bas-droite) ");
    }while($deplace<0 or $deplace>3);

    //réinitialisation du damier
    for($i=0;$i<10;$i++){
        for($j=0;$j<10;$j++){
            $jeu[$i][$j]="O ";
        }
    }

    //traitement déplacement
    switch($deplace){
        case 0 :
            $ligne=$ligne-1;
            $colonne=$colonne-1;
            break;

        case 1 :
            $ligne=$ligne-1;
            $colonne=$colonne+1;
            break;
        
        case 2 :
            $ligne=$ligne+1;
            $colonne=$colonne-1;
            break;

        case 3 :
            $ligne=$ligne+1;
            $colonne=$colonne+1;
            break;
    }    

    //afficher damier initial
    $jeu[$ligne-1][$colonne-1]="X ";

    //si pion hors limite
    if($ligne<=0 or $ligne>=11 $colonne<=0 or $colonne>=11){
        echo "pion hors damier";
    }
    else{
        echo "damier avec pion déplacé :";
        for($i=0;$i<10;$i++){
            echo "\n";
            for($j=0;$j<10;$j++){
                echo $jeu[$i][$j];
            }
        }
    }

?>