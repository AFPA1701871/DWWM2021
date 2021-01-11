<?php
    $nombre=readline("entrez un nombre: ");
    $nombreFin=$nombre+10;
    echo "voici les 10 nombres suivants:\n";
    while ($nombre<$nombreFin) {
        $nombre=$nombre+1;
        echo "$nombre\n";
    }   
?>