<?php
    $num =readline("Écrivez un nombre :");
    echo "le ". $num ." est un nombre ";
    if ($num>0) {
        echo "Positif";
    }   elseif ($num<0) {
        echo "Negatif";
    }
?>