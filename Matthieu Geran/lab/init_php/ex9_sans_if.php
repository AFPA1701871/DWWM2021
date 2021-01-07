<?php

    $age = readline("Âge : ");
    $sexe = readline("Sexe : ");

    switch($age and $sexe) {

        case ( ($sexe == "homme" and $age > 20) or ($sexe == "femme" and ($age >= 18 and $age <= 35) ) ) :
            echo "Vous êtes imposable.";
        break;

            default : echo "Vous n'êtes pas imposable.";
        break;
     
    }

?>