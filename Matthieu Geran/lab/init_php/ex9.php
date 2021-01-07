<?php

    $age = readline("Âge : ");
    $sexe = readline("Sexe : ");

    switch ($sexe) {

        case "homme" :
            if($age > 20){
                echo "Vous êtes imposable.";
            }else{
                echo "Vous n'êtes pas imposable.";
            }
        break;

        case "femme" :
            if($age >= 18 and $age <= 35){
                echo "Vous êtes imposable.";
            }else{
                echo "Vous n'êtes pas imposable.";
            }
            
        break;

    }

?>