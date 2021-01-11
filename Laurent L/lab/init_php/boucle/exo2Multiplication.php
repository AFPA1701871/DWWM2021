
<?php

    $nombre = readline("Entrez un nombre : ");
    $i = 1;

    while ($i<=10){
        echo $i." * ".$nombre." = ".($i*$nombre)."\n";
        $i++;
    }

?>