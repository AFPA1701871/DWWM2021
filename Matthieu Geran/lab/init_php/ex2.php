<?php
    $a = readline("Tapez la valeur de A : ");
    $b = readline("Tapez la valeur de B : ");
    $c = readline("Tapez la valeur de C : ");

    $temp=$c;
    $c=$b;
    $b=$a;
    $a=$temp;
 

    echo "Valeur A : ". $a ." - Valeur B : ". $b ." - Valeur C : ". $c;

?>