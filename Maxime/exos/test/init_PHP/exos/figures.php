<?php

    echo "figure 1 :"."\n";

    for($i=1;$i<8;$i++){
        $ligne="";
        for($j=1;$j<=$i;$j++){
            if($j==1 or $j==$i){
                $ligne=$ligne."X";
            }
            else if($i!=8){
                $ligne=$ligne."O";
            }
            else{
                $ligne=$ligne."X";
            }
        }
        echo "$ligne \n";
    }

    echo "\n";
    echo "figure 2 : \n";

    $ligne="";

    for($i=1;$i<=7;$i++){
        $ligne="*";
        echo "$ligne \n";
    }

    for($i=6;$i>=1;$i--){
        $ligne="";
        for($j=1;$j<=$i;$j++){
            $ligne="*";
        }
        echo "$ligne \n";
    }

?>