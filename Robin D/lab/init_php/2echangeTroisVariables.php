<?php
    $a=1;
    $b=2;
    $c=3;

    $temp=$b;
    $b=$a;

    $temp2=$c;
    $c=$temp;

    $a=$temp2;
    echo "$a\n";
    echo "$b\n";
    echo "$c\n";
?>