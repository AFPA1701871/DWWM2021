<?php
    function inverserMot($valeur,$i,$j,$length){
        if ($i < ($length / 2)){
            $stock = $valeur[$i];
            $valeur[$i] = $valeur[$j];
            $valeur[$j] = $stock;
            $i++;
            $j--;
            return inverserMot($valeur,$i,$j,$length);
        }else{
            return $valeur;
        }
    }
?>