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

    //fonction pour quitter la console 
    function quit($inputUser){
        if($inputUser=="quit"){
            exit;
        }
    }

    //fonction pour se logger et accéder à la suite
    function login(string $inputLogin, string $inputPassword){
        $fp = fopen("../BDD/config.ini", "r");
        $compteur=0;
        while(!feof($fp)){
            fgets($fp,4096);
            if($compteur==0){
                $compteur++;
            }
            if($compteur>0){
                $tabLoginPassword=explode(";",fgets($fp,4096));
            }   
        } if($tabLoginPassword[0]==$inputLogin and $tabLoginPassword[1]==$inputPassword){
            $boolean=true;
            }else{
                $boolean=false;
                echo "Login ou mot de passe incorrect "."\n";
            }
        return $boolean;
    }

    function call($inputUser){
        $tab=explode(" ",$inputUser);
        switch ($inputUser){
            case $tab[0]== "CREATE" and $tab[1]== "TABLE" and substr($inputUser,-1,1) == ";":
                $function=createTable();
                break;
            case $tab[0]== "INSERT" and $tab[1]== "INTO" and substr($inputUser[3],0,6)== "VALUES" and substr($inputUser,-1,1)== ";":
                $function=insertInto();
                break;
            case $tab[0]== "SELECT" and $tab[2]== "FROM" and substr($value,-1,1)== ";":
                if($tab[1]=="*"){
                    $function=selectEtoileFrom();
                }else{
                    $function=selectFrom();
                }
                break;
            default:
                $function=0;
                echo "Erreur de syntaxe";
            return $function;
        }

    }


?>