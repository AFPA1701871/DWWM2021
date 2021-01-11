<?php
    do {
        $totalNbVal=readline("Ecrivez le nombre de valeur que vous voulez ajouter :");
    } while ($totalNbVal<=0);
    do {
        $nbVal=readline("Ecrivez une valeur a ajouter :");
        $tab[]=$nbVal;
    } while (sizeof($tab) <> $totalNbVal);
?>