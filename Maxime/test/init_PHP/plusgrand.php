<?php

    $nb=1;
    $a=1;
    $plus=0;

    while($nb!=="fin"){
            $nb=readline("entrer votre valeur (fin pour finir) ");
            $a++;
            if($nb!=0){
                if($a=1){
                    $plus=$nb;
                }
            }
            else if($nb>$plus){
                $plus=$nb;
            }
    }

    echo "le plus grand nombre est ".$plus;

?>