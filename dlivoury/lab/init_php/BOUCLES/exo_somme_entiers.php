<?php
    $nombre=readline("saisir un nombre: ");
    $resultat=0;

    for($i=0;$i<=$nombre;$i++){
        $resultat=$resultat+$i;
        while($nombre!=is_numeric($nombre)){
            $nombre=readline("saisir une valeur valide: ");
        }
        echo"$resultat\n";
    }