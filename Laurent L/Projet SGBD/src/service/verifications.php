<?php

function authentification($string){
    $auth = false;
    $fp = fopen("../BDD/config.ini","r");
    while(!feof($fp)){
        //pour prendre ligne apres ligne
        $ligne = fgets($fp,50);        
        //pour couper la ligne en donnée unitaire dans un tableau
        // $tabLine = explode(";",$ligne);   
        //concatener les données pour recreer une identification d'un user
        // $ligne = $tabLine[0].";".$tabLine[1]; 

        if($string == $ligne){
            $auth = true;
            break;
        }   
        // echo $string." ".$ligne." ".$auth;   
        // var_dump($string);
        // var_dump($ligne);    
        // $var = readline('quest');  
    }
    fclose($fp);
   
    return $auth;

}






?>