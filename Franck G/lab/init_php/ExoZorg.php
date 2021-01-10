<?php
    $sexe=readline("Etes vous un 0-homme ou une 1-femme ? ");
    $age=readline("Quelle est votre âge ?");
    switch ($sexe) {
        case 0 ;
            ($age>20) ? $info="vous etes impossable" : $info="vous n'etes pas imposable";
        break;
        case 1 ;
            ($age<=18)&&($age>=35) ? $info=" vous etes imposable" : $info="vous n'etes pas impossable";
        break;
        default :
            echo "recommencer";
    }
    echo $info
?>