<?php
    $sexe=readline("entrez votre sexe(M/F): ");
    $age=readline("entrez votre age: ");
    
    if ($age>=20 and $sexe=="M") {
        echo "vous êtes imposable !";
    }
    elseif ($age>=18 and $age<=35 and $sexe=="F") {
        echo "vous êtes imposable !";
    }
    else {
        echo "vous n'êtes pas imposable !";
    }    
?>