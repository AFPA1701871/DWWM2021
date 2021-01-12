<?php

    $tableau1 = array(0,2,4,6);
    $tableau2 = array(1,3,5,7);
    $tableau3 = array();

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

                    array_push($tableau3, $tableau1[$i]);

                    if ($tableau2[$i] > $tableau1[$i+1]){
                        array_push($tableau3, $tableau2[$i]);
                    }

                } 
            if ($tableau2[$i] < $tableau1[$i]) {

                    array_push($tableau3, $tableau2[$i]);

                    if  ($tableau1[$i] >$tableau2[$i+1]){
                        array_push($tableau3, $tableau1[$i]);
                    }

            }

    }

    foreach ($tableau3 as $valeur){
        echo $valeur;
    }
 
?>