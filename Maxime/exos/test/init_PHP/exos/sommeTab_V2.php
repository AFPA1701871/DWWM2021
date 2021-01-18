<?php

    $nb=0;
    $val=1;

    do{
        $nb=readline ("Entrez le nombre de valeur à saisir : ");
    } while ($nb<1 or $nb<(intdiv($nb, $val)) or $nb>(intdiv($nb, $val)));
        
    for ($i=1; $i<=$nb; $i++){
        $tableau[$i]=readline ("Entrez un nombre ". $i);
    }

    echo "La somme est de : ".array_sum($tableau);

?>