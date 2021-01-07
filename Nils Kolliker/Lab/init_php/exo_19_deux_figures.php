<?php

//pas réussi à faire le premier en qu'une double boucle
echo"X\n";
for($i=1;$i<7;$i++){
    echo"X";
    for($j=1;$j<$i;$j++){
        echo"O";
    }
    echo"X\n";
}
echo"XXXXXXXX\n";
echo"\n\n";




for($i=1;$i<14;$i++){
    /*racine carré d'un nombre au carré donne la valeur absolue de ce nombre, c'est a dire
    que ça le passe en positif si il est negatif et sa lui fait rien si il est positif*/
    for($j=1; $j<=7-sqrt((7-$i)*(7-$i)) ;$j++){
        echo "*";
    }
    echo"\n";
}
?>