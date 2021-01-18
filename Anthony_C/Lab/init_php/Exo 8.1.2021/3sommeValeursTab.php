<?php
    do {
        $totalNbVal=readline("Ecrivez le nombre de valeur que vous voulez ajouter :");
    } while ($totalNbVal<=0 or (intdiv($totalNbVal, 1) != $totalNbVal));
    do {
        $nbVal=readline("Ecrivez une valeur a ajouter :");
        $tab[]=$nbVal;
    } while (sizeof($tab) <> $totalNbVal);
    //Sans fonction
    $somme = 0;
    foreach ($tab as $nbVal) {
        $somme = $somme +$nbVal;
    }
    echo "La somme de vos valeur est : $somme.\n";

    //Avec fonction
    echo "La somme est : ".array_sum($tab);
?>