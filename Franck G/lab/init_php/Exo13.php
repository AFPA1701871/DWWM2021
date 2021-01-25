<?php

    $nombre=readline ("Ecrivez votre nombre");
    $resultat=1;
    echo "Les factorielles sont :" ."\n";
    for ($multiplicateur=1; $multiplicateur<=$nombre; $multiplicateur++) {
        $resultat=$resultat*$multiplicateur;
        echo $resultat . "\n";
    }

?>