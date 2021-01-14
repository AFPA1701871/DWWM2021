<?php
    do {
        $nbDeValeur=readline("entrez le nombre de valeur que vous allez entrez :");
    } while ($nbDeValeur<1);
    
    $plusGrandNombre=0;

    for ($i=1; $i < $nbDeValeur+1 ; $i++) { 
        $nombre=readline("entrez une valeur :");
        if ($nombre>$plusGrandNombre) {
            $plusGrandNombre=$nombre;
            $positionPlusGrandNombre=$i;
        }
    }

    echo "le plus grand nombre parmi les $nbDeValeur valeurs entrées est: $plusGrandNombre\n";
    echo "sa position est: ".$positionPlusGrandNombre;
?>