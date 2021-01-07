<?php
    $numero = readline("Ecrivez un nombre.");
    settype($numero,"integer");
    if($numero>=0){
        echo $numero . " est un nombre positif.";
    }
    else{
        echo $numero . " est un nombre negatif.";
    }
?>