<?php
    $nombre=readline("entrez un nombre: ");
    $nombreFin=$nombre+10;
    while ($nombre<$nombreFin) {
        $nombre=$nombre+1;
        echo "$nombre\n";
    }   
?>