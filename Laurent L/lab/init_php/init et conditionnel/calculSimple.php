<?php

    $nombre1 = readline("Nombre 1 : ");
    $nombre2 = readline("Nombre 2 : ");
    $operateur = readline("Operateur : ");

    switch($operateur){
        case "+" :
            $resultat = $nombre1+$nombre2;
            break;
        case "-" :
            $resultat = $nombre1-$nombre2;
            break;
        case "*" :
            $resultat = $nombre1*$nombre2;
            break;
        case "/" :
            if ($nombre2==0){
                $resultat = "l'infini et au delà!!!";
            } else {
                $resultat = $nombre1/$nombre2;
            };
            break;
        case "%" :
            $resultat = $nombre1%$nombre2;
            break;    
        default:
            echo "Vos saisies comportent un ou plusieurs erreurs";
    }

    echo "Votre opération : ".$nombre1." ".$operateur." ".$nombre2." = ".$resultat 
?>
