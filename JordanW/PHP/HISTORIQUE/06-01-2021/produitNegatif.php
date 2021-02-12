<?php

do{
    $intVal1 = readline("Valeur 1 : ");
}while(is_numeric($intVal1)==false);

do{
    $intVal2 = readline("Valeur 2 : ");
}while(is_numeric($intVal2)==false);

if ($intVal1*$intVal2 == 0){
    echo "Produit egal à zéro". "\n";   
}elseif($intVal1*$intVal2>0){
    echo "Produit positif". "\n";
}elseif($intVal1*$intVal2<0){
    echo "Produit négatif". "\n";
}

?>