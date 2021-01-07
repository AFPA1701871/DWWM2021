<?php
    $age=readline("entrer l'âge de l'enfant ");

    if($age<=5){
        echo "trop jeune";
    }
    else if($age>=12){
        echo "cadet";
    }

    else{
        switch ($age){
            case 6 || 7 :
                echo "poussin";
            break;

            case 8 || 9 :
                echo "pupille";
            break;
            
            case 10 || 11 :
                echo "minime";
             break;
        }
    }
?>