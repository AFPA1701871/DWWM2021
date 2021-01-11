<?php

$tab=[0];
$negatif=0;
$positif=0;
$num=0;
$num =readline("Écrivez un nombre : ");
    for ($i = 1; $i <= $num; $i++){
        $tab[] =readline("Écrivez une valeur : ");
        if ($tab[$i] <0){
            $negatif=$negatif+1;
        }
            elseif ($tab[$i] >0) {
                $positif=$positif+1;
            }
    }
    echo "Le nombre de valeurs negatives est : ".$negatif ."\n";
    echo "Le nombre de valeurs positives est : ".$positif;
?>