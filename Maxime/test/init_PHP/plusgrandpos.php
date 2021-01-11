<?php

    $nb=readline("entrer le nombre de valeur à saisir ");
    $val=readline("entrer votre valeur ");
    $j=1;
    for($i=0;$i<$nb-1;$i++){
            $val2=readline("entrer votre valeur ");
            if($val2>$val){
                $plus=$val2;
                $j++;
            }
            else{
                $plus=$val;
            }
    }

    echo "le plus grand nombre est ".$plus." en $j position";

?>