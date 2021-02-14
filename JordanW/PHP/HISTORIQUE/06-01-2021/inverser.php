
<?php

    $strVal1 = "toto";
    $strVal2 = "tata";

    echo "valeur 1 : ". $strVal1 . "\n";
    echo "valeur 2 : ". $strVal2 . "\n";

    $strValtemp = $strVal1;
    $strVal1 = $strVal2;
    $strVal2 = $strValtemp;

    echo "valeur 1 : ". $strVal1 ."\n";
    echo "valeur 2 : ". $strVal2;


?>    
