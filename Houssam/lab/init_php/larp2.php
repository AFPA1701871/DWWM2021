<?php

$num =readline("Écrivez un nombre : ") ."\n";
    echo "La table de multiplication de ce nombre est : "."\n";
    for($i = 1; $i <= 10; $i++){
        echo $num . " x " . $i . " = " .$num*$i;
    }
?>