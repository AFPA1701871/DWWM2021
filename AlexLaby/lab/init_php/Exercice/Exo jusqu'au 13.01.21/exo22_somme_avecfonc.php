<?php

    $intInputUser=0;

    while ($intInputUser<1 or $intInputUser<(intdiv($intInputUser,1)) or $intInputUser>(intdiv($intInputUser,1))){
        $intInputUser=readline ("Entrez le nombre de valeurs que vous souhaitez saisir. ");
    }
    for ($i=1; $i<=$intInputUser; $i++){
        $tablo[$i]=readline ("Entrez le nombre n° ". $i. " "); 
    }
    echo "La somme de ces valeurs ".array_sum($tablo);

?>
