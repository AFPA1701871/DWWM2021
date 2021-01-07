<?php
    $num =readline("Écrivez un nombre : ");

    while ($num==0){
        $num =readline("Écrivez un nombre différent de 0 : ");
    }
    
    if ($num<0) {
        echo "le ". $num ." est un nombre Negatif";
    }   elseif ($num>0) {
        echo "le ". $num ." est un nombre Positif";
    }   elseif ($num=0) {
        echo "le ". $num ." est un nombre Nul";
    }
?>