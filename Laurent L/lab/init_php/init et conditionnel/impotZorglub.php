<?php
    //variables
    $sexe = readline("Votre sexe (0-homme/1-femme) : ");
    $age = readline("Votre age : ");

    //switch case selon le sexe puis ternaire sur l'age
    switch ($sexe){
        case 0 :
            ($age>20) ? $info="Vous etes imposable!" : $info="Vous n'etes pas imposable, pour l'instant!!";
            break;
        case 1 :
            ($age>=18)&&($age<=35) ? $info="Vous etes imposable!" : $info="Vous n'etes pas ou plus imposable!!";
            break;
        default :
            $info = "Vous n'avez pas respecté les conditions de saisie";
    }

    echo $info;
?>