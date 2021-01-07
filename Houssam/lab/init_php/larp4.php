<?php

$num =readline("Écrivez un nombre : ") ."\n";
$valeur=1;
        for($i = 1; $i <= $num; $i++){
            $valeur = $valeur*$i;
            echo $valeur ."\n";
    }

?>