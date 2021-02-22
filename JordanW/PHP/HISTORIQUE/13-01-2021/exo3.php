<?php

    require("fonctionExo13-01.php");

    $strSaisie = readline("Saisir quelque chose : \n");
    $strPurge = readline("Saisir chaine a purger : \n");

    echo "Après purge : ". f_purge($strSaisie,$strPurge)."\n";

?>