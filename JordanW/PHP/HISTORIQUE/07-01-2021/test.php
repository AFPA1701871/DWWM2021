<?php

    echo "figure 2 :". "\n"."\n";
    $ligne="";

    for ($i=1; $i<=7; $i++){
        $ligne.="*";
        echo ($ligne)."\n";
    }
    for ($i=6; $i>=1; $i--){
        $ligne="";
        for ($i2=1; $i2<=$i; $i2++);{    
            $ligne.="*"; 
            echo "ici".$ligne;    
        } 
        echo $ligne."\n";        
    }
?>