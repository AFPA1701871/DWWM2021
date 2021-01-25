<?php

    $strValA = "A";
    $strValB = "B";
    $strValC = "C";

    echo "valeur A : ". $strValA . "\n";
    echo "valeur B : ". $strValB . "\n";
    echo "valeur C : ". $strValC . "\n";
    /* 
    b = a
    c = b
    a = c
    */

    $strValTemp = $strValB;
    $strValA = $strValC;
    $strValC = $strValB;
    $strValB = $strValTemp;

    echo "valeur A : ". $strValA . "\n";
    echo "valeur B : ". $strValB. "\n";
    echo "valeur C : ". $strValC. "\n";

?>