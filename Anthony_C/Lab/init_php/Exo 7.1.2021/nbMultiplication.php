<?php
    $nb=readline("Ecrivez un nombre.");
    for ($i=1; $i < 11; $i++) { 
        $multiplication=$nb*$i;
        echo "$nb x $i = $multiplication"."\n";
    }   
?>