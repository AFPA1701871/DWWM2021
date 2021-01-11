<?php

    $tableau = [5,2,3,4,1,9,8];

        for ($i=0;$i<=(count($tableau)%2);$i++){

            $sauvegarde = $tableau[$i];
            $tableau[$i] = $tableau[(count($tableau)-1)-$i];
            $tableau[(count($tableau)-1)-$i] = $sauvegarde;

        }

    foreach($tableau as $valeur){
        echo $valeur;
    }

?>