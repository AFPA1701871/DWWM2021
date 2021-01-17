<?php
    $a=readline("entrer un nombre : ");
    $b=readline("entrer un nombre : ");
    $c=readline("entrer un nombre : ");

    $tempo=$a;
    $tempo2=$b;
    $a=$c;
    $b=$tempo;
    $c=$tempo2;

    echo $a."\n";
    echo $b."\n";
    echo $c;    
?>