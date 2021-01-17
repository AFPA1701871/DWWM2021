<?php
    require("fonction_exo_1a3.php");

    $mot=readline("saisir un mot : ");

    $caracaPurger=readline("saisir des lettres a purger: ");
   
    echo"Mot purgé : ".' '.fPurge($mot,$caracaPurger);
?>
    