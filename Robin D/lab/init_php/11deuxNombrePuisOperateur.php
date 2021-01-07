<?php
    $nombre1=readline("entrez un nombre");
    $operateur=readline("entrez l'opérateur arithmétique de votre choix");
    $nombre2=readline("entrez un deuxième nombre");
    
    switch ($operateur) {
        case '+':
            $resultatCalcul=$nombre1+$nombre2;
            break;
        case '-':
            $resultatCalcul=$nombre1-$nombre2;
            break;
        case '*':
            $resultatCalcul=$nombre1*$nombre2;
            break;
        case '/':
            $resultatCalcul=$nombre1/$nombre2;
            break;
        default:
            $resultatCalcul="une ou plusieurs variables sont incorrectes";
            break;
    }
    

    echo "$nombre1 $operateur $nombre2  est égal à : ".$resultatCalcul ; 
?>