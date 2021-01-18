<?php

    $nbUser=readline ("Ecrivez votre nombre");
    $resultat=0;
    echo "La somme des entiers :" ."\n";
    for ($entier1=1; $entier1<=$nbUser; $entier1++) {
        $resultat=$resultat+$entier1;
        echo $resultat . "\n";
    }

?>
