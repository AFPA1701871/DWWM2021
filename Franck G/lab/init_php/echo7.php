<?php
    $age = readline("Veuillez rentrez l'âge de votre enfant");
    switch ($age) {
        case $age <= 5 : 
            echo "Votre enfant de $age ans ne peut pas être enregistrer";
            break;
        case 6 : 
            echo "Votre enfant de $age ans est dans les Poussins";
            break;
        case 7 : 
            echo "Votre enfant de $age ans est dans les Poussins ";
            break;
        case 8 : 
            echo "Votre enfant de $age ans est dans les Pupilles ";
            break;
        case 9 : 
            echo "Votre enfant de $age ans est dans les Pupilles ";
            break;
        case 10 : 
            echo "Votre enfant de $age ans est dans les Minimes ";
            break;
        case 11 : 
            echo "Votre enfant de $age ans est dans les Minimes ";
            break;   
        default :
        echo "Votre enfant de $age ans est dans les Cadets";
    }
?> 