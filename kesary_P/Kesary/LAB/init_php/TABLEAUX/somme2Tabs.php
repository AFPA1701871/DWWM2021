<?php
//Somme de deux tableaux dnas un troisième tableau
//Déclaration des 2 tableaux avec des valeurs
$tab1 = [4,8,7,9,1,5,4,6];
$tab2 = [7,6,5,2,1,3,7,4];

//Affichage des deux tableaux
echo "Voici le tableau 1 :";
    for ($i=0; $i < count($tab1) ; $i++) { 
        echo " ";
        echo $tab1[$i];
    }
    echo "\n";
    echo "Voici le tableau 2 :";
    for ($j=0; $j < count($tab2) ; $j++) { 
        echo " ";
    echo $tab2[$j];
    }

//Somme des deux tableau
    for ($i=0; $i < 8; $i++) { 
        $tab3[$i] = $tab1[$i] + $tab2[$i];
    }

//Affichage des résultats dans le troisième tableau
    echo "\n";
    echo "Voici le tableau 3 :";
    for ($i=0; $i < count($tab3) ; $i++) { 
        echo " ";
        echo $tab3[$i];
    }
?>






