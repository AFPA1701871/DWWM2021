<?php

function authentification($string){
    $fp = fopen("../BDD/config.ini","r");
    while(!feof($fp)){
        //pour prendre ligne apres ligne
        $ligne = fgets($fp,50);        
        //pour couper la ligne en donnée unitaire dans un tableau
        $tabLine = explode(";",$ligne);   
        //concatener les données pour recreer une identification d'un user
        $ligne = $tabLine[0].";".$tabLine[1]; 
        if($string == $ligne){
            $auth = true;
            break;
        }   
    }
    fclose($fp);
    return $auth;
}

function verifSaisie($saisie){
    $tabSaisie = explode(" ",$saisie);
    $tabSaisie[0] = strtoupper($tabSaisie[0]);
    $tabSaisie[1] = strtoupper($tabSaisie[1]);



    switch ($saisie){
        case ($tabSaisie[0]=="CREATE" and $tabSaisie[1]=="TABLE"):
            echo "CREATE TABLE ok";
            


    }










}




?>