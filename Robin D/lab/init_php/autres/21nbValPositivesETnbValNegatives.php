<?php
    do {
        $nbValeurs=readline("entrez le nombre de valeurs: ");
    } while ($nbValeurs < 1);

    for ($i=0; $i < $nbValeurs; $i++) { 
        $numValeur=$i+1;
        $tableauValeurs[$i]=readline("entrez la valeur N° $numValeur:");
    }

    $nbValeursNegatives=0;
    $nbValeursPositives=0;
    for ($i=0; $i < $nbValeurs ; $i++) { 
        if ($tableauValeurs[$i]<0) {
            $nbValeursNegatives=$nbValeursNegatives+1;
        }
        else {
            $nbValeursPositives=$nbValeursPositives+1;
        }
    }

    echo "le nombre de valeurs positives est: $nbValeursPositives\n";
    echo "le nombre de valeurs négatives est: $nbValeursNegatives";
?>