<?php

    echo"\n";
    echo "figure 1 :"."\n"."\n";

    

    for($i=1;$i<=8;$i++){ 
        $line=" ";     
        for($j=1;$j<=$i;$j++){
            if($j==1 or $j==$i){
                $line=$line."x";
            }else if($i!=8){
                $line=$line."o";
            }else{
                $line=$line."x";
            }
        }
        echo $line."\n";
    }

    echo "\n";
    echo "figure 2 :"."\n"."\n";

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
