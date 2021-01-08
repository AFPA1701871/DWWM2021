<?php
    echo "EXO 8 APRES-MIDI FIGURE"."\n";

    //PREMIERE FIGURE
    $intLigne= readline("Saisir nombre de ligne :");
    
    for ($i=1; $i <= $intLigne; $i++) { 
        $strFigure = "";
        for ($i2=1; $i2 <=$i ; $i2++) {
            //Si premiere/deuxieme/derniere ligne
            if ($i==1 OR $i==2 OR $i==$intLigne){
                $strFigure .= "x";
            //sinon troisieme ligne, X debut et fin  
            }else{
                if($i2==1 OR $i2==$i){
                    $strFigure .= "x";
                }else{
                    $strFigure .= "o";
                }
            }
        }
        echo $strFigure."\n"."\n";
    }
?>