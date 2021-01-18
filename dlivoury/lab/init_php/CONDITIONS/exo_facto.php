<?php
    $nombre=readline("saisir un nombre: ");
    $resultat=1;
    
    for($i=1;$i<=$nombre;$i++){
        $resultat=$resultat*$i;             
    }
    echo$resultat.' '."est la factorielle de".' '.$nombre;