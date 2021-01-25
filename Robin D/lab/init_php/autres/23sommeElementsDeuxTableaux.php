<?php
    $monTableau1 = array(4,8,7,9,1,5,4,6);
    $monTableau2 = array(7,6,5,2,1,3,7,4);

    for ($i=0; $i < 8 ; $i++) { 
        $montableau3[$i]=$monTableau1[$i]+$monTableau2[$i];
    }

    for ($i=0; $i < 8 ; $i++) { 
        echo "$montableau3[$i]\n";
    }
    
?>