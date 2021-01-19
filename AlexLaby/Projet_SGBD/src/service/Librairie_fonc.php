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
    //Fonction pour quitter la console 
    function quit($inputUser){
        if($inputUser=="quit"){
            exit;
        }
    }
    //Fonction pour accèder aux différentes fonctions SQL en gérant les erreurs de syntaxe de l'utilisateur
    function call($inputUser){
        //Converti mon string en tableau pour effectuer des vérifs de caractères
        $tabCall = explode(" ",$inputUser);
        //Switch pour gerer les différents "menus" et gérer la casse
        switch ($inputUser){
            case "" :
                break;
            case strtoupper($tabCall[0]) == "CREATE" and strtoupper($tabCall[1]) == "TABLE" and substr($inputUser,-1,1) == ";":
                createTable($inputUser);
                break;
            case strtoupper($tabCall[0]) == "INSERT" and strtoupper($tabCall[1]) == "INTO" and strtoupper(substr($tabCall[3],0,6)) == "VALUES" and substr($inputUser,-1,1) == ";":
                insertInto($inputUser);
                break;
            case strtoupper($tabCall[0]) == "SELECT" and $tabCall[1] == "*" and  strtoupper($tabCall[2])== "FROM" and substr($inputUser,-1,1) == ";":
                selectEtoileFrom($inputUser);
                break;
            case strtoupper($tabCall[0])== "SELECT" and strtoupper($tabCall[2])== "FROM" :
                selectFrom($inputUser);
                break;
            default:
                echo "Erreur de syntaxe.\n"; 
        } 
        $stop = false;
        return $stop;
    }
    //Fonction pour créer un fichier
    function createTable($inputUser){
        $nomFichier="..\BDD\\".substr($inputUser,13,(strpos($inputUser,"(")-13)).".dwmm";
        if(file_exists($nomFichier)){
            echo "Ce fichier existe déjà .\n";
        }else{
            //if ($bool = true){
            $fp = fopen($nomFichier,"w");
            fputs($fp, substr($inputUser,strpos($inputUser,"(")+1,(strpos($inputUser,")")-strlen($inputUser))));
            fclose($fp);
            echo substr($inputUser,13,(strpos($inputUser,"(")-13))." vient d'être créé.\n";
            //}
        }
    }


?>