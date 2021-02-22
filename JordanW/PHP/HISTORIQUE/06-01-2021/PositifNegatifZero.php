<?php

do{
    $intSaisie1 = readline("Chiffre : ");
}while(is_numeric($intSaisie1)==false);

switch (true) {
    case $intSaisie1==0:
        echo "zéro"."\n";
        break;
    case ($intSaisie1 > 0):
        echo "positif"."\n";
        break;
    case ($intSaisie1 < 0):
        echo "négatif"."\n";
        break;
    default:
        echo "problème"."\n";
        break;
}

if ($intSaisie1 ==0) {
    echo "zéro"."\n";
} elseif ($intSaisie1 >0){
    echo "positif"."\n";
} elseif ($intSaisie1 <0){
    echo "négatif"."\n";
}



?>