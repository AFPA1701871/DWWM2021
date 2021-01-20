<?php

    $intNb1=0;
    $intNb2=1;

    while ($intNb1<$intNb2 or $intNb1<1 or $intNb2<1){
        $intNb1=readline ("Entrez le nombre de chevaux partants : ");
        $intNb2=readline ("Entrez le nombre de chevaux joués : ");
    }
    $a=1;
    $b=1;
    for ($i=1; $i<=$intNb2; $i++){
        $a=$a*($i+$intNb1-$intNb2);
        $b=$b*$i;
    }
    $c=$a/$b;
    echo "Dans l’ordre, une chance sur ". $a . "\n";
    echo "Dans le désordre, une chance sur ". $c;

?>