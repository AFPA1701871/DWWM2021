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

//Premieres verifications sur les commandes du SQL qui permettent d'atteindre les spécificités
//de la commande via un switch
function verifSaisie($saisie){
    $tabSaisie = explode(" ",$saisie);
    $tabSaisie[0] = strtoupper($tabSaisie[0]);
    $tabSaisie[1] = strtoupper($tabSaisie[1]);
    
    switch ($saisie){
        case ($tabSaisie[0]=="CREATE" and $tabSaisie[1]=="TABLE" and substr($saisie,-1)==";"):
            create($saisie);
            break;
        case ($tabSaisie[0]=="INSERT" and $tabSaisie[1]=="INTO" and (strtoupper(substr($tabSaisie[3],0,6))=="VALUES") and substr($saisie,-1)==";"):
            insert($saisie);
            break;
        case ($tabSaisie[0]=="SELECT" and $tabSaisie[1]=="*" and $tabSaisie[2]=="FROM" and substr($saisie,-1)==";"):
            // selectFrom($tabSaisie[3]);
            break;
        default : 
            echo "Votre commande est invalide.\n";

    }
}

//fonction pour sortir dés que l'utilisateur le désire.
function quit($string){
    if (strtoupper($string)=="QUIT"){
        exit;
    }
}

//fonction renvoyant un booléen selon la taille du nom de fichier
function tailleFichier($string){
    $bool =true;
    if (strlen($string)>25){
    $bool = false;        
    }
    return $bool;
}

//fonction renvoyant une valeur selon la taille de chaque variable
//crée ou ajoutée par l'utilisateur.
function tailleChamps($string){
    $string = substr($string,0,-1);
    $champsUnitaire = explode(";",$string);
    $compteur = 0;
    for($i=0; $i<count($champsUnitaire);$i++){
        if(strlen($champsUnitaire[$i])>=25){
            $compteur++;
        }
    } 
    return $compteur;

}

//creation chemin
function chemin($string){
    return CHEMIN."$string".EXTENSION;
    
}


function create($string){
    $tabSaisie = explode(" ",$string);
    $nomEtChamps = explode("(",$tabSaisie[2]);
    $nomFichier = $nomEtChamps[0];
    $champsFichier = $nomEtChamps[1];
    $champsFichier = substr($champsFichier,0,-2); // supression des 2 dernier caracteres );
    $champsFichier = str_replace(",",";",$champsFichier).";";
    $tailleChamps = tailleChamps($champsFichier);
    $tailleFichier = tailleFichier($nomFichier);
    if (file_exists(chemin($nomFichier))){
        echo "Le fichier existe déjà. Veuillez en créer un autre sous un nom différent.\n";
    }else if( $tailleChamps>0 or $tailleFichier==false){   //!$taillechamps or
        echo "La taille du nom de fichier ou un des champs est supérieure à 25 caractères.\n";
    }else {
        $fp = fopen(chemin($nomFichier),"w");
        fputs($fp, $champsFichier);
        fclose($fp);
    }    
}

function insert($string){
    $tabSaisie = explode(" ",$string);
    $nomFichier = $tabSaisie[2];
    $champsFichier = substr($tabSaisie[3],7,-2);
    $champsFichier = explode(",",$champsFichier);
    $nbreChamps = count($champsFichier);      // nbre de champ a saisir voulu par l'utilisateur
    //verif de la présence des " ' " autour de chaque champ
    for($i=0;$i<count($champsFichier);$i++){
        if(strpos(substr($champsFichier[$i] ,0),"'")!=0 and strpos(substr($champsFichier[$i],-1),"'")!=(strlen($champsFichier[$i])-1)){
            $erreur = 1;
        }else {
            $champsFichier[$i] = substr($champsFichier[$i],1,-1);
        }
    }
    //recomposition des variables a saisir dans le fichier.
    $champsFichier = implode(";",$champsFichier).";";    
    //verif de la taille des différents champ et retourne un booléen
    $taillechamps = tailleChamps($champsFichier);

    if ($taillechamps<1 and $erreur <1){                      
        if (file_exists(chemin($nomFichier))){                 
            $fp = fopen(chemin($nomFichier),"r");
            $ligne = fgets($fp,4096);               // recup nombre de champ dans fichier destination.
            $ligne = explode(";",$ligne);
            fclose($fp);
            if ($nbreChamps == count($ligne)-1){    //verif du nbre de champ dans le fichier destination
                $fp = fopen(chemin($nomFichier),"a");
                $champsFichier = "\n".$champsFichier;
                fputs($fp, $champsFichier);
                fclose($fp);
            }else {
                echo "Votre nombre de variables ne coincide pas avec le fichier de destination.\n"; 
            }   
        }else {
            echo "Le fichier destination n'existe pas.\n";
        }
    }else { 
        echo "Erreur(s) de saisie des variables.\n"; 
    }
}

// function selectFrom($string){
//     $nomFichier = $string;
//     if (file_exists(chemin($nomFichier))){
//         $fp = fopen(chemin($nomFichier),"r");   
//         $ligne=fgets($fp,4096);    // determination du nombre de colonnes
//         $ligne=explode(";",$ligne);
//         $nbrechamp = count($ligne);
//         for($i=0;$i<$nbrechamp;$i++){  //initialisation nbre de caracteres par colonne
//             $nbreCaract[$i]=0;
//         }
//         while(!feof($fp)){


//         }




//     }else{
//         echo "Le fichier n'existe pas.";
//     }

// }






?>