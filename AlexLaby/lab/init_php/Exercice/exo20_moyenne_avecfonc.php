<?php

    for($i=1;$i<=9;$i++){
        $i2=readline ("Ecrivez un nombre");
        $monTablo[$i]=$i2;
    }
    foreach ($monTablo as $element) {
        echo $element."\n";
        }
    $intMoyenne= array_sum($monTablo)/count($monTablo);
    echo "\n". "La moyenne est : ".$intMoyenne;

?>
