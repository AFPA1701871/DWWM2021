<?php

    $age = readline("Tapez l'âge de l'enfant : ");

    if ($age == 6 or $age == 7){
        echo "Catégorie poussin.";
    }

    if ($age == 8 or $age == 9){
        echo "Catégorie pupille.";
    }

    if ($age == 10 or $age == 11){
        echo "Catégorie minime.";
    }

    if ($age == 12){
        echo "Catégorie cadet.";
    }

    if ($age < 6){
        echo "Enfant trop jeune.";
    }

    if ($age >12){
        echo "Enfant trop vieux.";
    }

?>