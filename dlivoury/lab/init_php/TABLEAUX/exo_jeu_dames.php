<?php
    for($i=0;$i<10;$i++){
        for($j=0;$j<10;$j++){
            $plateau[$i][$j]="o";
        }
    }
    //afficher le tableau
    echo"Voici le plateau de jeu: ";

    for($i=0;$i<10;$i++){
        echo"\n";
        for($j=0;$j<10;$j++){
            echo $plateau[$i][$j];
        }
    }

    //initialisation de la position initiale du pion
    echo"\n";
    do{
        $positionLigne=readline("sur quelle ligne voulez vous placer le pion?: ");
        $positionColonne=readline("sur quelle colonne voulez vous placer le pion?: ");
    }
    while($positionLigne<1 or $positionColonne>10 or $positionLigne>10 or $positionColonne<1);

        $plateau[$positionLigne-1][$positionColonne-1]="X";

    //afficher le pion sur le plateau de jeu 
    echo"Voici votre pion sur le plateau: ";
    for($i=0;$i<10;$i++){
        echo"\n";
        for($j=0;$j<10;$j++){
            echo $plateau[$i][$j];
        }
    }
    //demander les deplacement du pion sur le plateau
    echo"\n";
    do{
        $deplacement=readline("quel deplacement souhaitez vous efectuez? 0(en haut a gauche), 1(en haut a droite),2(en bas a gauche),3,(en bas a droite)");
    }
    while($deplacement!=0 and $deplacement!=1 and $deplacement!=2 and $deplacement!=3);

    //on va reinitialiser le plateau
    for($i=0;$i<10;$i++){
        for($j=0;$j<10;$j++){
            $plateau[$i][$j]="o";
        }
    }
    //traiter le deplacement

        switch($deplacement){
            case 0:
                $positionColonne--;
                $positionLigne--;
            case 1:
                $positionColonne++;
                $positionLigne--;
            case 2:
                $positionColonne--;
                $positionLigne++;
            case 3:
                $positionColonne++;
                $positionLigne--;
        }
    //affichage du pion sur le plateau
    $plateau[$positionLigne-1][$positionColonne-1]="X";
    if($positionLigne<=0 or $positionColonne>=11 or $positionColonne<=0 or $positionLigne>=11){//cas ou le pion sort du damier
        echo"mouvement infaisable, le pion sort du plateau";
    }
     //cas ou le pion reste dans le damier
     else{
         echo"Voici votre sur le damier: ";
         for($i=0;$i<10;$i++){
            echo"\n";
            for($j=0;$j<10;$j++){
                echo $plateau[$i][$j];
            }
        }
     }



?>