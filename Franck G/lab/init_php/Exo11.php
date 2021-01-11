<?php

    $nombre=readline ("Veuillez ecrire un nombre :");
    for ($multiplicateur=0; $multiplicateur<=10; $multiplicateur++) {
        $resultat=$nombre*$multiplicateur;
        echo $nombre . "x" . $multiplicateur . "=". $resultat . "\n";
    }

?>