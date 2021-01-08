<?php
     
    $chevauxP=readline("nombre de chevaux partants : ");
    $chevauxJ=readline("nombre de cheavaux joués : ");
 
    for($i=1;$i<=$chevauxP;$i++){
        $chevauxJFac=$chevauxJFac*$i;
    }

    $ordre=$ordre*($a+$chevauxP-$chevauxJ);
    $desordre=$desordre/$chevauxJFac;

    echo "dans l'ordre, une chance sur $ordre de gagner"."\n";
    echo "dans le désordre, une chance sur $desordre de gagner";

?>