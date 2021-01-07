<?php
$sex=readline("Sexe ?");
$age=readline("Age ?");

switch($sex){
    case "m":
        if ($age>20){
            echo "imposable";
        }    
        else{
            echo "pas imposable";
        }    
    case "f" :
        if (($age>=18)and($age<=35)){
            echo "imposable";
        }
        else
            echo "non imposable";
        }
            
?>
