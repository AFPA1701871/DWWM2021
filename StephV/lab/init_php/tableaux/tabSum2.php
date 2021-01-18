<?php

    $num=0;
    while ($num<1 or $num<(intdiv($num,1)) or $num>(intdiv($num,1))){
        $num=readline ("Entrez le nombre de valeurs à saisir ");
    }
    for ($i=1; $i<=$num; $i++){
        $tab[$i]=readline ("Saisir le nombre ". $i. " "); 
    }
    echo "La somme de ces valeurs ".array_sum($tab);

?>