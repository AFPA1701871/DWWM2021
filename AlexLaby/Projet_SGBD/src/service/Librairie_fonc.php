<?php

    //Permet de créer le fichier config.ini
    function initConfig(){
        $fp = fopen("../BDD/config.ini", "w");
        $varID = "login;password"."\n";
        $varIDrep= "admin;admin";

        fputs($fp,$varID);
        fputs($fp,$varIDrep);
        fclose($fp);
    }

    //Fonction pour quitter la console 
    function quit($inputUser){
        if($inputUser=="quit"){
            exit;
        }
    }

    //Fonction pour se logger et accéder à la suite
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
    //Fonction permettant d'appeler les autres fonctions SQL 
    function call($inputUser){
        $tab=explode(" ",$inputUser);
        switch ($inputUser){
            case "" :
                echo "Erreur de syntaxe";
            case $tab[0]== "CREATE" and $tab[1]== "TABLE" and substr($inputUser,-1,1) == ";":
                createTable($inputUser);
                break;
            case $tab[0]== "INSERT" and $tab[1]== "INTO" and substr($inputUser[3],0,6)== "VALUES" and substr($inputUser,-1,1)== ";":
                insertInto($inputUser);
                break;
            case $tab[0]== "SELECT" and $tab[2]== "FROM" and substr($value,-1,1)== ";":
                if($tab[1]=="*"){
                    selectEtoileFrom($inputUser);
                }else{
                    selectFrom($inputUser);
                }
                break;
            default:
                $boolean=false;
                echo "Erreur de syntaxe";
            return $boolean;
        }

    }
    //Fonction pour créer la table (le fichier)
    function createTable($inputUser){
        $createTable=strpos($inputUser,"(")-13; //Pour "virer" CREATE TABLE
        $nomTable=substr($inputUser,13,$createTable); //N'avoir que le nom de la table
        $filename="../BDD/$nomTable.dwwm";
        if(file_exists($filename)){
            echo "Le fichier existe déjà, trouvez un autre nom. \n";
        }else{
            $fp= fopen($filename, "w");
            echo fputs($fp, substr($inputUser,strpos($inputUser,"(")+1,(strpos($inputUser,")")-strlen($inputUser)))); // N'avoir que les données encodées dans les paranthèses
            fclose($fp);
        }
    }

    function insertInto($inputUser){
        $insertInto=strpos($inputUser,"V" or "v")-12; //Pour "virer" INSERT INTO
        $nomTable=substr($inputUser,12,$insertInto); //N'avoir que le nom de la table
        $filename="../BDD/$nomTable.dwwm";
        if(file_exists($filename)){
            $fp= fopen($filename, "a");
            fputs($fp, substr($inputUser,strpos($inputUser,"(")+1,(strpos($inputUser,")")-strlen($inputUser)))); // N'avoir que les données encodées dans les paranthèses
            fclose($fp);
        }

    }


?>