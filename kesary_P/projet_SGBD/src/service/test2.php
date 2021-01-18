<?php

function seConnecter($login,$passwd){
    $fichier = fopen("../BDD/config.ini","r");
    //$compteur =0;
    while(!feof($fichier)){
        $str = fgets($fichier,4096);
        //$tab = explode(";",$str); 
        $connect = false;
                //echo $tab[$i];
                 //if (strcmp($login,$tab[0]) == 0 && strcmp($passwd,$tab[1]) == 0) {
            if (($login == "admin") && ($passwd == "admin")){
                    $connect = true;
                    return $connect;
                }else{
                    $connect = false;
    
                    return $connect;
                }
    }
    fclose($fichier);
}


?>