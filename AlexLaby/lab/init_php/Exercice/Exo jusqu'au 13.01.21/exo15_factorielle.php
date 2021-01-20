<?php

    $nbUser=readline ("Ecrivez votre nombre");
    $resultat=1;
    echo "Les factorielles sont :" ."\n";
    for ($multiplicateur=1; $multiplicateur<=$nbUser; $multiplicateur++) {
        $resultat=$resultat*$multiplicateur;
        echo $resultat . "\n";
    }

?>