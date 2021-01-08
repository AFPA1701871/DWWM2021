<?php

    $nb=readline("entrer le nombre de valeur à saisir ");
    
    for($i=1;$i<$nb+1;$i++){
            $val=readline("entrer votre valeur (fin pour finir) ");
            if($i<2){
                $plus=$val;
                $j=1;
            }
            else if($plus>$val){
                $plus=$nb;
                $j++;
            }
    }

    echo "le plus grand nombre est ".$plus;

?>