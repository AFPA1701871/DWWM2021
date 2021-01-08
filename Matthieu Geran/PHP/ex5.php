<?php

    
    $nb1 = -999999999;
    $nbPosition = 0;

    for ($i=1;$i<=5;$i++){
        
        $nb2 = readline("Tapez le nombre " . $i . " : ");
        
        if ($nb2>$nb1){
            $nb1=$nb2;
            $nbPosition = $i;
        }

    }

    echo "Le plus grand nombre est " . $nb1 . " en position " . $nbPosition . ".";

?>