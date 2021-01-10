<?php
    $age=readline("quel est votre age?: ");
    $sexe=readline("indiquez botre sexe: ");

        switch($sexe){
            case "homme":
                if ($age>=20){
                    echo"vous allez payer de l'impot";
                }
                    else{
                        echo"vous ne payez pas d'impot";
                }
            break;
            case"femme":
                if ($age>=18 and $age<=35){
                    echo"vous allez payer de l'impot";
                }
                    else{   
                        echo"vous ne payez pas d'impôt";
                    }
            break;
            default:
                    echo"sexe inconnu";
        }
?>
            