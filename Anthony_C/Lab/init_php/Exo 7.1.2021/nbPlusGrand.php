<?php
    $nbNombre=readline("Ecrivez le nombre de valeur que vous voulez notez :");
    $nb=readline("Ecrivez un nombre :");
    $nbPlusGrand=$nb;
    for ($i=0; $i<($nbNombre-1) ; $i++) { 
        $nb=readline("Ecrivez un nombre :");
        if ($nb>$nbPlusGrand) {
            $nbPlusGrand=$nb;
        }
    }
    echo "Le nombre le plus grand est : $nbPlusGrand";
?>