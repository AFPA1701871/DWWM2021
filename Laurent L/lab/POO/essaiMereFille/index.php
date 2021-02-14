<?php

    function chargerClasse($classe){
        require($classe.".class.php");
    }

    spl_autoload_register("chargerClasse");
    
    $animal1 = new Animal(4,25);

    $animal1->manger("viande");

    $animal1->deplacement();

    $chien1 = new Chien(4,40,"Bouvier des Flandres");

    // $chien1->set_race("Bouvier des Ardennes");

    $chien1-> deplacement();

    $chien1-> mordre();


?>