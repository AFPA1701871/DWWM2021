<?php

    require("fonctionExo13-01.php");

    $strSaisie = readline("Saisir quelque chose : \n");
    do {
        $strPurge = readline("Saisir caractere a purger : \n");
    }while(strlen($strPurge)!=1);

    echo "Après purge : ". f_purge($strSaisie,$strPurge)."\n";

    echo "Après purge avec fonction str_replace() : ". str_replace($strPurge,"",$strSaisie)."\n";

?>