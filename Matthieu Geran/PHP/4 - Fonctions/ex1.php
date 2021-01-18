<?php

    require("fonctions.php");

    $phrase = readline("Tapez votre phrase : ");

    echo "Nombre de voyelles : " . fonctionVoyelles($phrase);

?>