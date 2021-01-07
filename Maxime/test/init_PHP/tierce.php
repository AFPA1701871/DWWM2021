<?php

    do{
        $chevauxP=readline("nombre de chevaux partants : ");
        $chevauxJ=readline("nombre de cheavaux joués : ");
    }while($chevauxJ<=0 || $chevauxP<$chevauxJ)

    $ordre=1;
    $chevauxJFac=1;

    for($a=1;$chevauxJ;$a++){
        $chevauxJFac=$chevauxJFac*$a;
        $ordre=$ordre*($a+$chevauxP-$chevauxJ);
    }

    $desordre=$desordre/$chevauxJFac;

    echo "dans l'ordre, une chance sur $ordre de gagner"."\n";
    echo "dans le désordre, une chance sur $desordre de gagner";

?>