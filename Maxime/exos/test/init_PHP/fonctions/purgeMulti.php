<?php

    require('fonctionExtern.php');

    $phrase=readline("entrer une phrase : ");
    $purge=readline("entrer les caractères à supprimer : ");
    echo "la phrase devient : ".purgeMulti($phrase,$purge);

?>