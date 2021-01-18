<?php

    $nb1 = -999999999;
    $nbPosition = 0;

    for ($i=1;$i<=5;$i++){

        do{       
            $nb2 = readline("Tapez le nombre " . $i . " : ");
        } while ($nb2 <= 0 or $nb2 <> intdiv($nb2, 1));
        
        if ($nb2>$nb1){
            $nb1=$nb2;
            $nbPosition = $i;
        }

    }

    echo "Le plus grand nombre est " . $nb1 . " en position " . $nbPosition . ".";

?>