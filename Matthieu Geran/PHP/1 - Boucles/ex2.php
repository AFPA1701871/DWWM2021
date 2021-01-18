<?php

    $nombre = readline("Tapez un nombre : ");

    for ($i=1;$i<=10;$i++){
        $resultat=$nombre * $i;
        echo $nombre . " x " . $i . " = " . $resultat ."\n";
    }

?>