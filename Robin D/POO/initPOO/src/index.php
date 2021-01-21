<?php
    require ('./initPOO/src/entities/Pigeon.php');

    echo "    ****Bienvenue dans pigeon simulator!****\n";

    $bernardLePigeon=new Pigeon;
    $bernardLePigeon->fly(10);
    $cuttedPaws=readline("combien de pattes voulez-vous couper à Bernard le pigeon? ");
    $bernardLePigeon->cutPaws($cuttedPaws);

?>