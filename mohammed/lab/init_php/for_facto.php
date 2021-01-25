<?php
    $facto=1; // var facto pour factorielle
    $nombre = readline(" entrez nombre");
    for ($i=1; $i<$nombre+1 ; $i++) {         
         $facto=$facto*$i;
    }
    echo " le factoriel est  ". $facto."\n";
    ?>