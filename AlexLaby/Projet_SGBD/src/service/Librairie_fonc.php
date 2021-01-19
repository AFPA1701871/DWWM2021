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
        $tab =  explode(" ",$inputUser);
        switch ($inputUser){
            case "" :
                echo "Erreur de syntaxe";
                break;
            case $tab[0]== "create" and $tab[1]== "table" and substr($inputUser,-1,1) == ";":
                    createTable($inputUser);
                    break;
            case $tab[0]== "insert" and $tab[1]== "into" and substr($tab[3],0,6)== "values" and substr($inputUser,-1,1) == ";":
                insertInto($inputUser);
                break;
            case $tab[0]== "select" and $tab[1]== "*" and $tab[2]=="from" and substr($inputUser,-1,1) == ";":
                selectEtoileFrom($inputUser);
                break;
            case $tab[0]== "select" and $tab[1]== "from" and substr($inputUser,-1,1) == ";":
                selectFrom($inputUser);
                break;
            default:
                $boolean=false;
                echo "Erreur de syntaxe";
            return $boolean;
        }
    }
    //Fonction pour créer la table (le fichier)
    function createTable($inputUser){
        $filename="../BDD//".substr($inputUser,13,(strpos($inputUser,"(")-13)).".DWWM";
        if(file_exists($filename)){
            echo "Le fichier existe déjà, trouvez un autre nom. \n";
        }else{
            if(longueurCarac($inputUser)==true){
            $fp = fopen($filename, "w");
            fputs($fp, substr($inputUser,strpos($inputUser,"(")+1,(strpos($inputUser,")")-strlen($inputUser))));
            }
            fclose($fp);
        }
        }
    //Fonction qui permet de vérifier si une colonne dépasse 25 caractères
    function longueurCarac($inputUser){
        $boolean = true;
            if(strlen($inputUser)>25){
                $boolean = false;
                echo "Création impossible, nombre de caractères supérieurs à 25. \n";
            } 
            return $boolean;  
        }
        


?>