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
    //Fonction pour créer la table (le fichier)
    function createTable($inputUser){
        $boolean=true;
        // Va permettre de savoir si le fichier existe, si il existe on demande à l'user un autre nom et mon boolean est faux.
        if (file_exists("../BDD/".$inputUser[2].".dwwm")){ 
            echo "Le fichier existe déjà, trouvez un autre nom.\n"; 
            $boolean=false;
        }
        // Va permettre de voir si les colonnes sont trop longues ou non, si elles le sont on demande à l'user de les faires moins longues et mon boolean est faux.
        for ($i=3;$i<count($inputUser);$i++){
            if (strlen($inputUser[$i])>25){
                echo "Nom de colonne trop long. Créez votre fichier avec des colonnes moins longues\n";
                $boolean=false;
            }
        }
        print_r($inputUser);
        // Si l'user à respecté tous les blocages, le boolean reste vrai, on l'autorise à créer un fichier
        if($boolean==true){
            $fichier = fopen("../BDD/".$inputUser[2].".dwwm","w");  
            for ($i=3;$i<count($inputUser);$i++){
                fputs($fichier,$inputUser[$i]);
                if ($i!=count($inputUser)-1){
                        fputs($fichier,";");
                }      
            }
            fclose($fichier);
        }   
    }
    //Fonction pour insérer une nouvelle ligne dans le fichier
    function insertInto($inputUser){

    }

?>