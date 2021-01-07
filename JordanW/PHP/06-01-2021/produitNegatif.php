<?php

$intVal1 = readline("Valeur 1 : ");
$intVal2 = readline("Valeur 2 : ");

if ($intVal1*$intVal2 == 0){
    echo "Produit egal à zéro". "\n";   
}elseif($intVal1*$intVal2>0){
    echo "Produit positif". "\n";
}elseif($intVal1*$intVal2<0){
    echo "Produit négatif". "\n";
}

?>