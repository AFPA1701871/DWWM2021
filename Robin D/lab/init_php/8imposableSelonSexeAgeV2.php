<?php
    $sexe=readline("entrez votre sexe(m/f): ");
    $age=readline("entrez votre age: ");
    
    switch ($sexe) {
        case 'm':
            if ($age>=20) {
                echo "vous êtes imposable !";
            }
            else {
                echo "vous n'êtes pas imposable !";
            }
            break;

        case 'f':
            if ($age>=18 and $age<=35) {
                echo "vous êtes imposable !";
            }
            else {
                echo "vous n'êtes pas imposable !";
            }
            break;
        
        default:
            echo "LES VALEURS NE SONT PAS CORRECTES!";
            break;
    }
?>