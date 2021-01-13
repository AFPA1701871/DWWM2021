<?php
    do {
        $nbValeurs=readline("entrez le nombre de valeurs: ");
    } while ($nbValeurs<1 or intdiv($nbValeurs,1)!=$nbValeurs);

    for ($i=0; $i < $nbValeurs; $i++) { 
        $numValeur=$i+1;
        $tableauValeurs[$i]=readline("entrez la valeur N° $numValeur:");
    }

    $sommeDesValeurs=0;
    for ($i=0; $i < $nbValeurs; $i++) { 
        $sommeDesValeurs=$sommeDesValeurs+$tableauValeurs[$i];
    }

    echo "la somme des valeurs du tableau est $sommeDesValeurs";
?>