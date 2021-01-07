<?php
    $a = 1;
    $b = 2;
    
    $stock = $a;
    $a = $b;
    $b = $stock;

    echo $a . "\n" . $b;
?>