<?php

    $tableau1=[4,8,7,9,1,5,4,6];
    $tableau2=[7,6,5,2,1,3,7,4];

    for ($i=0;$i<=7;$i++){
        $tableauSomme[$i] = $tableau1[$i] + $tableau2[$i];
        echo $tableauSomme[$i] . "\n";
    }

?>