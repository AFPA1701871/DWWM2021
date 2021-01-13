<?php
    // créer le plateau de jeu de 10X10 remplit de "O"
    for ($i=0; $i < 10; $i++) { 
        for ($j=0; $j < 10; $j++) { 
            $plateauJeu[$i][$j]="O";
        }
    }

    // Afficher le plateau de jeu
    echo "voici le plateau de jeu vide:";
    for ($i=0; $i < 10; $i++) {
        echo "\n";
        for ($j=0; $j <10; $j++) { 
            echo $plateauJeu[$i][$j];
        }
    }
    
    // Demander la position initiale du pion sur le damier
    echo "\n";
    do {
        $positionPionLigne=readline("sur quelle ligne se trouve votre pion ? ");
        $positionPionColonne=readline("sur quelle colonne se trouve votre pion ? ");
    } while ($positionPionLigne<1 or $positionPionColonne>10 or $positionPionColonne<1 or $positionPionColonne>10);

    $plateauJeu[$positionPionLigne-1][$positionPionColonne-1]="X";

    // Afficher la position inititale du pion sur le plateau de jeu
    echo "voici la position de votre pion sur le plateau:";
    for ($i=0; $i < 10; $i++) {
        echo "\n";
        for ($j=0; $j <10; $j++) { 
            echo $plateauJeu[$i][$j];
        }
    }

    // Demander le déplacement du pion sur le damier
    echo "\n";
    
    do {
        $mouvement=readline("quel mouvement souhaitez-vous effectuer? 0(en haut à gauche), 1(en haut à droite), 2(en bas à gauche), 3 (en bas à droite) : ");
    } while ($mouvement!=0 and $mouvement!=1 and $mouvement!=2 and $mouvement!=3);

    // Réinitilisation du plateau pour effacer la position antérieure du pion
    for ($i=0; $i < 10; $i++) { 
        for ($j=0; $j < 10; $j++) { 
            $plateauJeu[$i][$j]="O";
        }
    }

    // Traitement du déplacement du pion
    if ($mouvement==0) {
        $positionPionLigne=$positionPionLigne-1;
        $positionPionColonne=$positionPionColonne-1;
    }
    elseif ($mouvement==1) {
        $positionPionLigne=$positionPionLigne-1;
        $positionPionColonne=$positionPionColonne+1;
    }
    elseif ($mouvement==2) {
        $positionPionLigne=$positionPionLigne+1;
        $positionPionColonne=$positionPionColonne-1;
    }
    elseif ($mouvement==3) {
        $positionPionLigne=$positionPionLigne-1;
        $positionPionColonne=$positionPionColonne+1;
    }

    // Afficher la position inititale du pion sur le plateau de jeu
    $plateauJeu[$positionPionLigne-1][$positionPionColonne-1]="X";
    // cas où le pion sort du damier
    if($positionPionLigne<=0 or $positionPionLigne>=11 or $positionPionColonne<=0 or $positionPionColonne>=11) {
        echo "mouvement impossible, votre pion sort du damier";
    }
    // cas où le pion reste à l'intérieur du damier
    else {
        echo "voici la position de votre pion sur le plateau:";
        for ($i=0; $i < 10; $i++) {
            echo "\n";
            for ($j=0; $j <10; $j++) { 
                echo $plateauJeu[$i][$j];
            }
        }
    }
?>