<?php

    echo "\n";
    echo "figure 1 :"."\n"."\n";
    echo "X"."\n";

    for($i=1;$i<7;$i++){
        echo "X";
        for($j=1;$j<$i;$j++){
            echo "O";
        }
        echo "X"."\n";
    }

    echo "XXXXXXXXX"."\n";
    echo "\n";
    echo "figure 2 :"."\n"."\n";

    $ligne="";

    for($i=1;$i<=7;$i++){
        $ligne="*";
        echo "$ligne"."\n";
    }

    for($i=6;$i>=1;$i--){
        $ligne="";
        for($j=1;$j<=$i;$j++){
            $ligne="*";
        }
        echo "$ligne"."\n";
    }

?>