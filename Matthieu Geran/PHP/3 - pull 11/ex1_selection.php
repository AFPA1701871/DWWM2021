<?php

    $tableau = [5,2,3,4,1,9,8];
    $boolean = true;

    for($i=0;$i<=count($tableau)-2;$i++){

        $boolean = false;
        $nombre = 0;

        for ($k=$i+1;$k<=count($tableau)-1;$k++){

            if ($tableau[$k] > $tableau[$i] and $tableau[$k] > $nombre){
                
                $nombre = $tableau[$k];
                $case = $k;
                $boolean = true;
            }

        }

        if ($boolean){

            $tableau[$case] = $tableau[$i];
            $tableau[$i] = $nombre;

        }

    }

    foreach($tableau as $valeur){
        echo $valeur;
    }

?>