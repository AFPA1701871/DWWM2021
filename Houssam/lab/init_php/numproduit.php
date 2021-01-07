<?php
echo "Écrivez deux nombres : ". "\n";
    $num1 =readline("Nombre 1 : ");
    $num2 =readline("Nombre 2 : ");
    
    if ($num1==0 or $num2==0) {
        echo "le produit est Nul";
    }   elseif ($num1<0 and $num2 <0 or $num1>0 and $num2 >0)  {
        echo "le produit est Positif";
    }   elseif ($num1<0 and $num2 >0 or $num1>0 and $num2 <0) {
        echo "le produit est Negatif";
    }
?>