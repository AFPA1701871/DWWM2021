<?php

    echo "figure 1 :"."\n";
    echo "X"."\n";

    for($i=0;$i<6;$i++){
        echo "X";
        for($j=0;$j<$i;$j++){
            echo "O";
        }
        echo "X"."\n";
    }

    echo "XXXXXXXX"."\n"."\n";

    echo "figure 2 :"."\n";

    for($i=0;$i<=6;$i++){
        $ligne="*";
        echo "$ligne";
    }

    echo "\n";

    for($i=5;$i>=0;$i--){
        $ligne="";
        for($j=0;$j<=$i;$j++){
            $ligne="*";
        }
        echo "$ligne";
    }

?>