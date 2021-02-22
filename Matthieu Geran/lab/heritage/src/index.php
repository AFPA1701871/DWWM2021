<?php

    function chargementClasse($classe){
        require("./entites/".$classe.".php");
    }

    spl_autoload_register("chargementClasse");

    $toto = new Paladin(100,150);

    $toto->dialogue(); // fonction dans Personnage
    echo "\n";
    $toto->sortSoin(); // fonction dans Paladin
    echo "\n";
    $toto->direCaracteristiques(); // fonction dans Paladin qui demande des attributs de Personnage et Paladin
    echo "\n";
    $toto->vanter(); // Méthode finale

?>