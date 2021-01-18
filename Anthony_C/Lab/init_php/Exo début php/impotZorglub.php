<?php
    $sexe=readline("HOMME ou FEMME?");
        $sexe=strtoupper($sexe);
        settype($sexe,"string");
    $age=readline("Votre âge?");
    if($sexe=="HOMME"){
        switch($age){
            case $age>20 :
                echo "félicitation vous devez payer des impots.";
                break;
            default :
                echo "Non imposable.";
        }
    }
    elseif($sexe=="FEMME"){
        switch($age){
            case $age>18 and $age<=35 :
                echo "félicitation vous devez payer des impots.";
                break;
            default :
                echo "Non imposable.";
        }
    }
?>