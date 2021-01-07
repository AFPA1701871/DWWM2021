<?php

    echo"\n";
    echo "figure1 :"."\n"."\n";

    echo"X\n";
    for($i=1;$i<7;$i++){
        echo"X";
        for($j=1;$j<$i;$j++){
            echo"O";
        }
        echo"X\n";
    }
    echo"XXXXXXXX\n";
    echo"\n";

    echo "figure2 :"."\n"."\n";

    $ligne = "";
    for ($i=1; $i <= 7; $i++) { 
        $ligne .= "*";
        echo $ligne."\n";
    }

    for ($i=6 ; $i >=1 ; $i--) { 
        $ligne = "";
        for ($i2=1; $i2 <=$i ; $i2++) {
            $ligne .= "*";
        }
        echo $ligne."\n";
    }

?>
