<?php
    require("fonction_exo_1a3.php");

    $mot=readline("saisir un mot : ");
    do{
        $caracaPurger=readline("saisir une lettre a purger: ");
    }while(strlen($caracaPurger)!=1);

    echo"Mot purgé : ".' '.fPurge($mot,$caracaPurger)."\n";

?>
