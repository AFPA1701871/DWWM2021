<?php

$num =readline("Écrivez un nombre : ") ."\n";
$stop=$num+10;
    echo "Les 10 nombres suivants sont : "."\n";
    while($num<$stop){
        $num=$num+1;
        echo $num;
    }
?>