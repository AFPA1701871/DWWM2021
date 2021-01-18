<?php

    $tableau = [5,2,3,4,1,9,8];
    $boolean = true;

    while($boolean){

        $boolean = false;

        for ($i=0;$i<=count($tableau)-2;$i++){

            if ($tableau[$i] < $tableau[$i+1]){
                $sauvegarde = $tableau[$i];
                $tableau[$i] = $tableau[$i+1];
                $tableau[$i+1] = $sauvegarde;
                $boolean = true;
            }

        }

    }

    foreach($tableau as $valeur){
        echo $valeur;
    }

?>