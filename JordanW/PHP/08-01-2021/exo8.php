<?php

    $tabVal = array("poire","pomme","banane");
    $strSaisie=readline("Saisir un mot : ");

    $boolExiste=false;
    foreach ($tabVal as $strVal) { 
        if ($strSaisie === $strVal){
            $boolExiste=true;
        }
    }
    if($boolExiste){
        echo "Le mot existe";
    }else{
        echo "Le mot n'existe pas";
    }

    echo "\n";
    echo "\n";

    if(in_array($strSaisie,$tabVal,true)){
        echo "Le mot existe";
    }else{
        echo "Le mot n'existe pas";
    }
?>