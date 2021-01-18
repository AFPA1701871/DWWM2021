<?php
    require("4function.php");
    $valeur="Hello World";
    $i =0;
    $length = strlen($valeur);
    $j = $length-1;
    $valeur = inverserMot($valeur,$i,$j,$length);
    echo $valeur;
?>