<?php

    $nb=1;
    $a=1;
    $plus=0;
    $pos=1;

    while($nb!=="fin"){
            $nb=readline("entrer votre valeur (fin pour finir) ");
            $a++;
            if($nb!=0){
                if($a=1){
                    $plus=$nb;
                    $pos=$a;
                }
            }
            else if($nb>$plus){
                $plus=$nb;
                $pos=$a;
            }
    }

    echo "le plus grand nombre est ".$plus."en position ".$pos;

?>