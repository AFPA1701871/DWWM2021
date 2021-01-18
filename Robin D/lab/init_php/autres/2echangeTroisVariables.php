<?php
    $a=1;
    $b=2;
    $c=3;

    $temp=$b;
    $b=$a;

    $temp2=$c;
    $c=$temp;

    $a=$temp2;
    echo "la variable a est égale à: $a\n";
    echo "la variable b est égale à: $b\n";
    echo "la variable c est égale à: $c\n";
?>