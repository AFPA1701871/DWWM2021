<?php
    do {
        $totalNbVal=readline("Ecrivez le nombre de valeur que vous voulez ajouter :");
    } while ($totalNbVal<=0);
    do {
        $nbVal=readline("Ecrivez une valeur a ajouter :");
        $tab[]=$nbVal;
    } while (sizeof($tab) <> $totalNbVal);
    $positif = 0;
    $negatif = 0;
    foreach ($tab as $nbVal) {
        if ($nbVal > 0){
            $positif = $positif + 1;
        } else {
            $negatif = $negatif +1;
        }
    }
    echo "Il y a $positif nombre(s) positif et $negatif nombre(s) négatif 0 inclu."
?>