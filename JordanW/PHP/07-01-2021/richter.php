<?php

    $intEchelle = readline("Saisir l'echelle");
    $strMsg = "Saisie incorrecte";
    if (!(is_int($intEchelle))){
        switch($intEchelle){
            case 1 :
                $strMsg = "Micro...";
                break;
            case 2 :
                $strMsg = "très mineur....";
                break;
            case 3 :
                $strMsg = "Mineur....";
                break;
            case 4 :
                $strMsg = "leger...";
                break;
            case 5 :
                $strMsg = "Modere..";
                break;
            case 6 :
                $strMsg = "Fort...";
                break;
            case 7 :
                $strMsg = "Majeur...";
                break;
            case 8 :
                $strMsg = "Important...";
                break;
            case 9 :
                $strMsg = "Devastateur...";
                break;
            default:
                if ($intEchelle>9){
                    $strMsg="C'est l'apocalypse";
                } 
                break;
        }
        echo "non integer"."\n";
    }
    echo $strMsg;

?>