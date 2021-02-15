<?php
    echo "EXO 8 APRES-MIDI FIGURE 2"."\n";

    do{
        $intLigne= readline("Saisir nombre de ligne :");
    }while(is_numeric($intLigne)==false);
    $strFigure = "";
    for ($i=1; $i <= (int)($intLigne/2)+1; $i++){ 
        $strFigure .= "*";
        echo $strFigure."\n";
    }
    for ($i=(int)($intLigne/2); $i >=1 ; $i--) {
        echo substr($strFigure,1,$i)."\n";
    }
?>