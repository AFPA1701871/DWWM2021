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
    $strValB = $strValA;
    $strValA = $strValTemp;

    $strValTemp = $strValC;
    $strValC = $strValA;
    $strValA = $strValTemp;

    echo "valeur A : ". $strValA . "\n";
    echo "valeur B : ". $strValB. "\n";
    echo "valeur C : ". $strValC. "\n";

?>