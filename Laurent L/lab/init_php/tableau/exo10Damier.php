<?php
    //Variables
    $tab = [];

    //Position de départ déterminée par l'utilisateur
    do{
        $ligne = readline("Quelle ligne ? ");
        $colonne = readline("Quelle colonne ? ");
    } while(($ligne<0) or ($colonne<0) or ($ligne>=8) or ($colonne>=8));
    //Bouclage jusqu'à sortie du plateau
    while (($ligne>=0) && ($colonne>=0) && ($ligne<8) && ($colonne<8)){
        //Presentation des déplacements possibles et choix du deplacement
        echo "Les deplacements possibles :\n0 en haut à gauche\n1 en haut à droite\n2 en bas  à gauche\n3 en bas  à droite\n";
        do{
            $deplacement = readline("Quel est votre choix ?  ");
        }while ($deplacement !== "0" && $deplacement !== "1" && $deplacement !== "2" && $deplacement !== "3");
        echo "\n";
        //pour determiner la nouvelle position du pion suivant déplacement
        switch($deplacement){
            case 0 : 
                $ligne--;
                $colonne--;
                break;
            case 1 :
                $ligne--;
                $colonne++;
                break;
            case 2 :
                $ligne++;
                $colonne--;
                break;
            case 3 :
                $ligne++;
                $colonne++;
                break;
        }
        //conditionnel si l'on est hors echiquier ou affichage de l'échiquier avec nouvelle position    
        if(($ligne<0) or ($colonne<0) or ($ligne>=8) or ($colonne>=8)){
            echo "Vous etes en dehors de l'échiquier.\n        Au revoir et à bientôt...";
        } else {
            //Creation de la table à deux dimensions
            for($i = 0; $i < 8 ; $i++){
                for($j = 0; $j<8 ; $j++){
                    $tab[$i][$j] = "O";
                }
            }
            //Mise en place du pion 
            $tab[$ligne][$colonne] = "X"; 
            //affichage de l'echiquier
            for($i = 0 ; $i < 8 ; $i++){
                echo "|";
                for($j = 0 ; $j < 8 ; $j++){
                    echo $tab[$i][$j]."|"; 
                }
                echo"\n";
            }
        }
    }
?>