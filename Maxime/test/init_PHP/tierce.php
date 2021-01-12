<?php
     
    $chevauxP=readline("nombre de chevaux partants : ");
    $chevauxJ=readline("nombre de cheavaux joués : ");
    $factoJ=1;
    $factoP=1;
    $factoJP=1;
 
    for($i=1;$i<=$chevauxP;$i++){
        $factoJ=$factoJ*$i;
        if($i<=$chevauxJ){
            $factoJ=$factoJ*$i;
            if($i<=$chevauxP-$chevauxJ){
                $factoJP=$factoJP*$i;
            }
        }
    }

    $ordre=$factoP/$factoJP;
    $desordre=$factoP/($factoJ*$factoJP);

    echo "dans l'ordre, une chance sur $ordre de gagner"."\n";
    echo "dans le désordre, une chance sur $desordre de gagner";

?>