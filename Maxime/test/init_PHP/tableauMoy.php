<?php

    $val=0;

    for($i=1;$i<=9;$i++){
        $nb=readline("entrer un nombre ");
        $tableau[$i]=$nb;
        $val+=$nb;
    }

    $moy=$val/count($tableau);
    echo "la moyenne est de $moy";

?>