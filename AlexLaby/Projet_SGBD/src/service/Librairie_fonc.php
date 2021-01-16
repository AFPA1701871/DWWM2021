<?php

//permet de créer le fichier config.ini
function initConfig(){
    $fp = fopen("../BDD/config.ini", "w");
    $varID = "login;password"."\n";
    $varIDrep= "admin;admin";

    fputs($fp,$varID);
    fputs($fp,$varIDrep);
    fclose($fp);
}

//fonction pour se logger et accéder à la suite
function login($inputLogin,$inputPassword){
    $fp = fopen("../BDD/config.ini", "r");
    $compteur=0;
    while(!feof($fp,4096)){
        fgets($fp,4096);
        if($compteur==0){
            $compteur++;
        }
    }
}

?>