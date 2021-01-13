<?php

    require("fonctionExo13-01.php");

    echo "\n PREMIERE VERSION SANS FONCTION PREDEFINIE \n";

    $strSaisie = readline("Saisir quelque chose : \n");
    $strPurge = readline("Saisir chaine a purger : \n");

    echo "Après purge : ". f_purge($strSaisie,$strPurge)."\n";

?>