<?php

    require("fonctions.php");

    $phrase = readline("Tapez votre phrase : ");
    $valeursPurge = readline("Lettres à enlever : ");

    echo fonctionPurge2($phrase,$valeursPurge);

?>