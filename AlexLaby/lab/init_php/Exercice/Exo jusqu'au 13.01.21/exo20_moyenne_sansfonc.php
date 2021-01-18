<?php

    $valeurTablo=0;
    for($i=1;$i<=9;$i++){
        $i2=readline ("Ecrivez un nombre");
        $monTablo[$i]=$i2;
        $valeurTablo+=$i2;
    }
    foreach ($monTablo as $element) {
        echo $element."\n";
        }
    $intMoyenne=$valeurTablo/count($monTablo);
    echo "\n". "La moyenne est : ".$intMoyenne;

?>
