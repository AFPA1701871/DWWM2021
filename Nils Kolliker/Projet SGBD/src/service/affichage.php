<?php
//affiche un joli décore autour du tableau
//prend en entré un tableau de dim 2
//retourne true et c'est tout
function joliTableau($tableau){
    jolieLigne($tableau);
    jolieLigneDeTableau($tableau,0);
    jolieLigne($tableau);
    if (count($tableau)>1){
        for ($i=1;$i<count($tableau);$i++){
            jolieLigneDeTableau($tableau,$i);
        }
        jolieLigne($tableau);
    }
    return true;
}

//affiche une jolie ligne en utilisant les dimentions des collonnes du tableau pour les dimentions
//prend en entré un tableau de dim 2
//retourne true et c'est tout
function jolieLigne($tableau){
    echo "+";
    for ($j=0;$j<count($tableau[0]);$j++){
        echo "-";
        for ($i=0;$i<iconv_strlen($tableau[0][$j]);$i++){
            echo"-";
        }
        echo "-+";
    }
    echo "\n";
    return true;
}
//affiche une ligne du tableau avec une jolie décoration dont on a choisi le n°
//prend en entré un tableau de dim 2 et un entier représentant le n° de la ligne à afficher
//retourne true et c'est tout
function jolieLigneDeTableau($tableau,$int){
    echo "|";
    for ($j=0;$j<count($tableau[0]);$j++){
        echo " ".$tableau[$int][$j]." |";
    }
    echo "\n";
    return true;
}
?>