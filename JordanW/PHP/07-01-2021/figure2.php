<?php
    echo "EXO 8 APRES-MIDI FIGURE 2"."\n";

    $intLigne= readline("Saisir nombre de ligne :");

    $strFigure = "";
    for ($i=1; $i <= (int)($intLigne/2)+1; $i++){ 
        $strFigure .= "*";
        echo $strFigure."\n";
    }
    for ($i=(int)($intLigne/2); $i >=1 ; $i--) {
        echo substr($strFigure,1,$i)."\n";
    }
?>