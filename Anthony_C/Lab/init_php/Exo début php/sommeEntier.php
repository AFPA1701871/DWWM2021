<?php
    $somme=0;
    $nb=readline("Ecrire un nombre pour avoir la somme entier jusqu'a ce nombre!");
    for ($i=1; $i<=$nb ; $i++){ 
        $somme=$somme+$i;
        echo $somme."\n";
    }
?>