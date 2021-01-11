<?php
    do {
        $nbValeurs=readline("entrez le nombre de valeurs: ");
    } while ($nbValeurs < 1);

    for ($i=0; $i < $nbValeurs; $i++) { 
        $numValeur=$i+1;
        $tableauValeurs[$i]=readline("entrez la valeur N° $numValeur:");
    }

    $sommeDesValeurs=array_sum($tableauValeurs);

    echo "la somme des valeurs du tableau est $sommeDesValeurs";
?>