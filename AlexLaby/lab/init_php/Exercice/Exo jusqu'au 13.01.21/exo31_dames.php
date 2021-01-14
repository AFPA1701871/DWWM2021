<?php
    //Avoir la première position du joueur
    $lignePlayer=0;
    $colonnePlayer=0;
    while ($lignePlayer<1 or $lignePlayer>10){
        $lignePlayer=readline ("Sur quelle ligne souhaitez-vous mettre votre pion ? ");
    }
    while ($colonnePlayer<1 or $colonnePlayer>10){
        $colonnePlayer=readline ("Sur quelle colonne souhaitez-vous mettre votre pion ? ");
    }

    //Création du damier dans la console avec position joueur de base
    for($ligne=1;$ligne<=10;$ligne++){
        for($colonne=1;$colonne<=10;$colonne++){
            if($ligne==$lignePlayer and $colonne==$colonnePlayer){
                $jeuDames[$ligne][$colonne]= "X";
            }else{
                $jeuDames[$ligne][$colonne]= "O";
            }
        }
    }
    for($ligne=1;$ligne<=10;$ligne++){
        echo implode( " ",$jeuDames[$ligne])."\n";
    }

    $boolean=false;
    while($boolean==false){
        //Déplacement du pion
        do {
            $deplacementPlayer=readline ("Saisir 0 (en haut à gauche, 1 (en haut à droite), 2 (en bas à gauche), 3 (en bas à droite) ");
        } while ($deplacementPlayer!=0 and $deplacementPlayer!=1 and $deplacementPlayer!=2 and $deplacementPlayer!=3 );       
        if($deplacementPlayer==0){
            $lignePlayer=$lignePlayer-1;
            $colonnePlayer=$colonnePlayer-1;
        }else if($deplacementPlayer==1){
            $lignePlayer=$lignePlayer-1;
            $colonnePlayer=$colonnePlayer+1;
        }else if($deplacementPlayer==2){
            $lignePlayer=$lignePlayer+1;
            $colonnePlayer=$colonnePlayer-1;
        }else if($deplacementPlayer==3){
            $lignePlayer=$lignePlayer+1;
            $colonnePlayer=$colonnePlayer+1;
        }

        //Création du damier dans la console avec position joueur déplacé
        if($boolean==false){
            for($ligne=1;$ligne<=10;$ligne++){
                for($colonne=1;$colonne<=10;$colonne++){
                    if($ligne==$lignePlayer and $colonne==$colonnePlayer){
                        $jeuDames[$ligne][$colonne]= "X";
                    }else{
                        $jeuDames[$ligne][$colonne]= "O";
                    }
                }
            }        
            for($ligne=1;$ligne<=10;$ligne++){
                echo implode( " ",$jeuDames[$ligne])."\n";
            }
        }
        
        //Gérer les hors limites
        if($lignePlayer<1 or $lignePlayer>10){
            echo "Vous êtes hors zone au niveau des lignes.";
            $boolean=true;
        }else if($colonnePlayer<1 or $colonnePlayer>10){
            echo "Vous êtes hors zone au niveau des colonnes.";
            $boolean=true;
        }

        
    }

?>