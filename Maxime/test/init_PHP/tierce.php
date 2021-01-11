<?php
     
    $chevauxP=readline("nombre de chevaux partants : ");
    $chevauxJ=readline("nombre de cheavaux joués : ");
    $chevauxJFac=1;
    $ordre=1;
    $desordre=1;
 
    for($i=1;$i<=$chevauxP;$i++){
        $chevauxJFac=$chevauxJFac*$i;
    }

    $ordre=$ordre*($i+$chevauxP-$chevauxJ);
    $desordre=$desordre/$chevauxJFac;

    echo "dans l'ordre, une chance sur $ordre de gagner"."\n";
    echo "dans le désordre, une chance sur $desordre de gagner";

?>