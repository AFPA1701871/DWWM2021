<?php
    $a = 1;
    $b = 2;
    $c = 3;

    $stock = $a;
    $a = $c;
    $c = $b;
    $b = $stock;

    echo "a = " . $a ."\n" . "b = " . $b ."\n" . "c = " . $c;
?>