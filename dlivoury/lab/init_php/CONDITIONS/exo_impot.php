<?php
    $age=readline("quel est votre age?: ");
    $sexe=readline("indiquez votre sexe: ");

    if($age!=is_numeric($age)or $sexe!=is_string($sexe)or $sexe!="homme" or $sexe!="femme"){
        echo"recommencez votre saisie: ".' ';
        echo"\n";
        $sexe=readline("saisir un genre valide: ");
        $age=readline("saisir un age valide: ");
    }
   
    
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
                    echo("sexe inconnu");
        }
?>
            