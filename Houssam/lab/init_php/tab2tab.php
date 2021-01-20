<?php

$tab[1]=array ("4","8","7","9","1","5","4","6");
$tab[2]=array ("7","6","5","2","1","3","7","4");
    for ($i = 1; $i <= $num; $i++){
        $tab[] =readline("Écrivez une somme : ");
        $somme=$somme+$tab[$i];
    }
    echo "La somme est : ".$somme;
?>