<?php

    require('fonctionExtern.php');

    $phrase=readline("entrer une phrase : ");
    $purge=readline("entrer le caractère à supprimer : ");
    echo "la phrase devient : ".purge($phrase,$purge);

?>