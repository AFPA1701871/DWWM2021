<?php

    $sexe=readLine ("Ecrivez 1 pour homme ou 2 pour femme ");
    $age=readLine ("Ecrivez votre âge ");

    switch ($sexe) {
        case 1 :
            if ($age>20){   
                echo "Vous êtes imposable";
            break;
            }
            else if ($age<=20){
                echo "Vous n'êtes pas imposable";
            }
            break;

        case 2 :
            if ($age>=18 and $age<=35){   
                echo "Vous êtes imposable";
            break;
            }
            else if ($age<18 or $age>35){
                echo "Vous n'êtes pas imposable";
            }     
            break;
            
        default :
            echo "Erreur de saisie";
        break;
    }

?>
