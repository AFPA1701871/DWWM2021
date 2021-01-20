<?php

    require("fonctions.php");

    $phrase = readline("Tapez votre phrase : ");
    $valeurPurge = readline("Lettre à enlever : ");

    echo fonctionPurge($phrase,$valeurPurge);

?>