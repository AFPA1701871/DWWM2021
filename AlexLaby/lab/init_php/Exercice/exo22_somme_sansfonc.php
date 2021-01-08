<?php

    $intInputUser=0;
    $num2=1;
    $valeurSommeTableau=0;
    while ($intInputUser<1 or $intInputUser<(intdiv($intInputUser, $num2)) or $intInputUser>(intdiv($intInputUser, $num2))){
        $intInputUser=readline ("Entrez le nombre de valeurs que vous souhaitez saisir.");
    }
    for ($i=1; $i<=$intInputUser; $i++){
        $tablo[$i]=readline ("Entrez le nombre n° ". $i);
        $valeurSommeTableau+=$tablo[$i]; 
    }
    echo "La somme de ces valeurs ".$valeurSommeTableau;

?>
