<?php

    $sexe=readline("entrer le sexe de la personne ");
    $age=readline("entrer l'âge de la personne ");

    switch($sexe){
        case "homme":
            if($age>=20){
                echo "imposable";
            }
            else{
                echo "non imposable";
            }
        break;

        case "femme":
            if($age>=18 and $age<=35){
                echo "imposable";
            }
            else{
                echo "non imposable";
            }
        break;

        default:
            echo "non imposable";
    }
    
?>