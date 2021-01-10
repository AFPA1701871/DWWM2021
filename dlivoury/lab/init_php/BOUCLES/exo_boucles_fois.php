<?php
    $nombre=readline("saisir un nombre ou un chiffre: ");
    
    for($i=0;$i<=10;$i++){
        $resultat=$nombre*$i;
        echo "$resultat\n";
    }