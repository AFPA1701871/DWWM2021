<?php

    $indiceEchelle=readLine ("Ecrivez votre indice d'échelle, nous vous diront la magnitude des tremblements");

    switch ($indiceEchelle) {
        case 1 :
            echo"Micro tremblement de terre, non ressenti.";
            break;
        case 2 :
            echo"Très mineur, non ressenti mais détecté.";
            break;
        case 3 :
            echo"Mineur. Causant rarement des dommages.";
            break;
        case 4 :
            echo"Leger. ...";
            break;
        case 5 :
            echo"Modere. Legers dommages...";
            break;
        case 6 :
            echo"Fort. Destructeur...";
            break;
        case 7 :
            echo"Majeur. Dommages...";
            break;
        case 8 :
            echo"Important. Dommages...";
            break;
        case 9 :
            echo"Dévastateur...";
            break;
        default :
            if ($indiceEchelle<1){   
                echo "Erreur de saisie";
            break;
            } 
            else if ($indiceEchelle<9){
            }
            echo "C'est l'apocaslip";
            break;     
    }

?>
