<?php

//Fonction pour compter les voyelles 1er exo
function countVoyelles($inputUser){
    $voyelles= array ("a","e","i","o","u","y");
    //Conversion du string inputUser en tableau pour pourvoir le compter dans les for
    $split=str_split($inputUser);
    $compteur=0;

    for($i=0;$i<count($split);$i++){
        for($j=0;$j<count($voyelles);$j++){
            if($split[$i]==$voyelles[$j]){
                $compteur++;
            }
        }
    }
    return $compteur;   
}

//Fonction pour purger un ou plusieurs caractères dans une phrase 2eme exo
function foncpurge($inputUser,$inputPurge){
    $motFinal="";
    //Conversion des string en tableau pour pourvoir le compter dans les for
    $splitPurge=str_split($inputPurge);
    $splitUser=str_split($inputUser);
    
    for($i=0;$i<count($splitUser);$i++){
        $boolean=false;
        for($j=0;$j<count($splitPurge);$j++){
            //Conversion des tableau en string pour pouvoir faire un sous ensemble après
            $implodeUser=implode($splitUser);
            $implodePurge=implode($splitPurge);
            if(substr($implodeUser,$i,1)==substr($implodePurge,$j,1)){
                $boolean=true;
            }
        }
        if($boolean==false){
            $motFinal.=substr($implodeUser,$i,1);
       } 
    }
    return $motFinal;
}

//Fonction pour inverser les caractères dans un mot 3eme exo
function inversemot($inputUser){
    if(strlen($inputUser)==1){
        return $inputUser;
    }else{
       return inversemot(substr($inputUser,1,(strlen($inputUser)-1))).substr($inputUser,0,1); 
    }
}

?>