<?php

    require("fonctionExo13-01.php");

    $strSaisie = readline("Saisir quelque chose :");
    echo "il y a ".f_compteCaracterePresent(strtoupper($strSaisie),"AEIOUY")." voyelle(s)"."\n";

?>