<?php
    $somme=1;
    $nb=readline("Ecrire un nombre pour avoir la somme entier jusqu'a ce nombre!");
    for ($i=2; $i<=$nb ; $i++){ 
        $somme=$somme*$i;
        echo $somme."\n";
    }
?>