<?php
    $a=3;
    $b=6;
    $c=9;

    $temp=$b;
    $b=$a;
    $temp2=$c;
    $c=$temp;
    $a=$temp2;
    echo "a = ". $a ."\n";
    echo "b = ". $b ."\n";
    echo "c = ". $c;
?>