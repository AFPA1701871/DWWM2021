<?php

$tab=[0];
$somme=0;
$num=0;
$num =readline("Écrivez un nombre : ");
    for ($i = 1; $i <= $num; $i++){
        $tab[] =readline("Écrivez une somme : ");
        $somme=$somme+$tab[$i];
    }
    echo "La somme est : ".$somme;
?>