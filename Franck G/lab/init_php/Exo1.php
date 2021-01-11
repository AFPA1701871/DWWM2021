<?php    
    $a = 1;
    $b = 6;

    [$a, $b] = [$b, $a];

    echo $a."\n";
    echo $b;
?>