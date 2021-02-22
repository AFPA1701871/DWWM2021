<?php

//pas réussi à faire le premier en qu'une double boucle
$ligneFigure1=8;
$symboleTour="X";
$symboleCentre="O";

echo $symboleTour."\n";
for($i=1;$i<$ligneFigure1-1;$i++){
    echo $symboleTour;
    for($j=1;$j<$i;$j++){
        echo $symboleCentre;
    }
    echo $symboleTour."\n";
}
for($j=1;$j<=$ligneFigure1;$j++){
    echo $symboleTour;
}
echo"\n\n\n";


$ligneFigure2=13;
$symbolePlein="*";

for($i=1;$i<=$ligneFigure2;$i++){
    /*racine carré d'un nombre au carré donne la valeur absolue de ce nombre, c'est a dire
    que ça le passe en positif si il est negatif et sa lui fait rien si il est positif*/
    for($j=1; $j<=ceil($ligneFigure2/2)-sqrt(pow(ceil($ligneFigure2/2)-$i,2)) ;$j++){
        echo $symbolePlein;
    }
    echo"\n";
}
?>