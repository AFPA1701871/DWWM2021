<?php

    require ("../service/fonction.php");  //liaison avec fichier fonction
    spl_autoload_register("chargerClasse");  //liaison avec toutes les classes

    $voiture1 = new Voiture();
    $voiture1->set_marque("audi");


    echo "La marque de votre voiture est : ".$voiture1->get_marque();






?>