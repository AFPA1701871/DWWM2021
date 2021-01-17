<?php

    $a=1;
    $b=3;
    $c=5;
    $temp=$b;
    $b=$a;
    $a=$c;
    $c=$temp;

    echo "afficher a :". $a. "\n". "afficher b :". $b. "\n". "afficher c :". $c;
    
?>
