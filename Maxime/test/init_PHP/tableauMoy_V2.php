<?php

    for($i=1;$i<=9;$i++){
        $nb=readline("entrer un nombre ");
        $tableau[$i]=$nb;
    }

    $moy=array_sum($tableau)/count($tableau);
    echo "la moyenne est de $moy";

?>