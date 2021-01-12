<?php

    $plateau = array();
    $plateau[0] = array("O","O","O","O","O","O","O","O");
    $plateau[1] = array("O","O","O","O","O","O","O","O");
    $plateau[2] = array("O","O","O","O","O","O","O","O");
    $plateau[3] = array("O","O","O","O","O","O","O","O");
    $plateau[4] = array("O","O","O","O","O","O","O","O");
    $plateau[5] = array("O","O","O","O","O","O","O","O");
    $plateau[6] = array("O","O","O","O","O","O","O","O");
    $plateau[7] = array("O","O","O","O","O","O","O","O");

    do{
    $ligne = readline("A quelle ligne se trouve votre pion ? (de 0 à 7) ");
    } while ($ligne <0 or $ligne > 7 or $ligne <> intdiv($ligne, 1));

    do{
    $colonne = readline("A quelle colonne se trouve votre pion ? (de 0 à 7) ");
    } while ($colonne <0 or $colonne > 7 or $colonne <> intdiv($colonne, 1));

    $plateau[$ligne][$colonne] = "X";

    echo "\n";

    for ($i=0;$i<=count($plateau)-1;$i++){

        foreach ($plateau[$i] as $valeur){
            echo $valeur . "  ";
        }

        echo "\n";
        
    }

    echo "\n";

    $action = readline("Quelle action voulez-vous faire ? (0 en haut à gauche, 1 en haut à droite, 2 en bas à gauche, 3 en bas à droite.) ");

    switch ($action){

        case 0 :
            $plateau[$ligne][$colonne] = "O";
            $ligne--;
            $colonne--;
            $plateau[$ligne][$colonne] = "X";
            break;

        case 1 :
            $plateau[$ligne][$colonne] = "O";
            $ligne--;
            $colonne++;
            $plateau[$ligne][$colonne] = "X";
            break;
        
        case 2 :
            $plateau[$ligne][$colonne] = "O";
            $ligne++;
            $colonne--;
            $plateau[$ligne][$colonne] = "X";
            break;

        case 3 :
            $plateau[$ligne][$colonne] = "O";
            $ligne++;
            $colonne++;
            $plateau[$ligne][$colonne] = "X";
            break;

    }

    echo "\n";

    if ($ligne >=0 and $ligne <=7 and $colonne >=0 and $colonne <=7){

        for ($i=0;$i<=count($plateau)-1;$i++){
            foreach ($plateau[$i] as $valeur){
                echo $valeur . "  ";
            }
            echo "\n";
        }

        echo "\n";

    } else {
        echo "Pion hors du plateau.";
    }
?>