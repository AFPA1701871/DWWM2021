<?php
    $nombre=readline("saisir un nombre: ");
    $resultat=0;

    for($i=0;$i<=$nombre;$i++){
        $resultat=$resultat+$i;
        echo"$resultat\n";
    }