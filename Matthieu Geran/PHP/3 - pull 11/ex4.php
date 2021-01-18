<?php

    $tableau1 = [0,2,4,6];
    $tableau2 = [1,3,5,7];
    $case = 0;

    foreach ($tableau1 as $valeur){
        echo $valeur;
    }

    echo "\n";

    foreach ($tableau2 as $valeur){
        echo $valeur;
    }

    echo "\n";

    for ($i=0;$i<=count($tableau2)-1;$i++){

        if ($tableau1[$i] < $tableau2[$i]){

            $tableau3[$case] = $tableau1[$i];
            $case++;
            $tableau3[$case] = $tableau2[$i];

        } else {

            $tableau3[$case] = $tableau2[$i];
            $case++;
            $tableau3[$case] = $tableau1[$i];

        }

        $case++;

    }

    foreach ($tableau3 as $valeur){
        echo $valeur;
    }
 
?>