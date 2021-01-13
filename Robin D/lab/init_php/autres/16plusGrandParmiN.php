<?php
    do {
        $nbDeValeur=readline("entrez le nombre de valeur que vous allez entrez :");
    } while ($nbDeValeur<1);
    
    $plusGrandNombre=0;
    $i=1;

    while ($i <= $nbDeValeur) {
        $nombre=readline("entrez une valeur :");
        if ($nombre>$plusGrandNombre) {
            $plusGrandNombre=$nombre;
            $positionPlusGrandNombre=$i;
        }
        $i=$i+1;
    }

    echo "le plus grand nombre parmi les $nbDeValeur valeurs entrées est: $plusGrandNombre\n";
    echo "sa position est: ".$positionPlusGrandNombre;
?>