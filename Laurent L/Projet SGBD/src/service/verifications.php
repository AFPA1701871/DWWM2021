<?php

<<<<<<< HEAD
function login($string){
    $fp = fopen("../BDD/config.ini","r");
        $auth = false;
        while(!feof($fp)){
            //pour prendre ligne apres ligne
            $ligne = fgets($fp,50);        
            //pour couper la ligne en donnée unitaire dans un tableau
            $tabLine = explode(";",$ligne);   
            //concatener les données pour recreer une identification d'un user
            $ligne = $tabLine[0].";".$tabLine[1]; 
            if($string == $ligne){
                $auth = true;
            }   
            // echo $user." ".$ligne." ".$auth;   
            // var_dump($user);
            // var_dump($ligne);      
        }
        if(!$auth){
            echo "Identification incorrecte.\n";
        }       
        fclose($fp);
        return $auth;
}




























// analyse de la saisie et recupération des variables de traitement

function analyse($commande){
    $tabCommande = explode(" ",$commande);
    if ($tabCommande[0]=="create" && $tabCommande[1]=="table"){
        $instruction =$tabCommande[0].$tabCommande[1];
        $fichier = $tabCommande[2];
        if ((strpos($fichier,"(") && strpos($fichier,")") && strpos($fichier,","))){
            $tabFichier = explode("(",$fichier);
            $nomFichier = $tabFichier[0];
            $enteteFichier = $tabFichier[1];
            $enteteFichier = str_replace(",",";",$enteteFichier);
            $enteteFichier = str_replace(")",";",$enteteFichier);
        } else{
            $erreurSyntaxe = true;
        }
        
    } else if($tabCommande[0]=="insert" && $tabCommande[1]=="into" && (substr($tabCommande[3],0,5)=="values")){
        $instruction = $tabCommande[0].$tabCommande[1];
        $nomFichier = $tabCommande[2];
        if ((strpos($tabCommande[3],"(") && strpos($tabCommande[3],")") && strpos($tabCommande[3],",") && strpos($tabCommande[3],"'"))){
            $tabFichier = explode("(",$tabCommande[3]);
            $enteteFichier = $tabFichier[1];
            $enteteFichier = str_replace("'","",$enteteFichier);
            $enteteFichier = str_replace(",",";",$enteteFichier);
            $enteteFichier = str_replace(")",";",$enteteFichier);
        } else{
            $erreurSyntaxe = true;
        }
    } else if($tabCommande[0]=="select" && $tabCommande[1]=="*" && $tabCommande[2]=="from"){
        print_r($tabCommande);
        $instruction = $tabCommande[0].$tabCommande[1].$tabCommande[2];
        $nomFichier = $tabCommande[3];
    } else{
        $erreurSyntaxe = true;
=======
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
<<<<<<< HEAD
=======
        // echo $string." ".$ligne." ".$auth;   
        // var_dump($string);
        // var_dump($ligne);    
        // $var = readline('quest');  
>>>>>>> bba43cd120d18552ac90c373cf5ae7e488682370
>>>>>>> 46bf071425c0a3bba3afdd903980b1d2ce5580e4
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
            break;
        case ($tabSaisie[0]=="INSERT" and $tabSaisie[1]=="INTO"):
            echo "INSERT INTO ok";
            break;
        case ($tabSaisie[0]=="SELECT" and $tabSaisie[2]=="FROM")
            

    }










}




?>