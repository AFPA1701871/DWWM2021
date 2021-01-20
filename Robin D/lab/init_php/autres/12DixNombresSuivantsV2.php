<?php
    $nombre=readline("entrez un nombre: ");
    echo "voici les 10 nombres suivants:\n";
    for ($i=1; $i < 11 ; $i++) { 
        $nombre2=$nombre+$i;
        echo "$nombre2\n";
    }
?>