<?php

    $age = readline("Tapez l'âge de l'enfant : ");

    switch ($age) {

        case 6 :
        case 7 :
            echo "Catégorie poussin.";
        break;

        case 8 :
        case 9 :
            echo "Catégorie pupille.";
        break;

        case 10 :
        case 11 :
            echo "Catégorie minime.";
        break;

        case 12 :
            echo "Catégorie cadet.";
        break;
     
        default : echo "Enfant trop jeune ou trop âgé.";
    }

?>