<?php

//Fonction pour compter les voyelles 1er exo
function countVoyelles($inputUser){
    $voyelles= array ("a","e","i","o","u","y");
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

//Fonction pour purger un ou plusieurs caractères dans une phrase
function foncpurge($inputUser,$inputPurge){
    $motFinal="";
    $splitPurge=str_split($inputPurge);
    $splitUser=str_split($inputUser);
    
    for($i=0;$i<count($splitUser);$i++){
        $boolean=false;
        for($j=0;$j<count($splitPurge);$j++){
            if($splitUser[$i]==$splitPurge[$j]){
                $boolean=true;
            }
        }
        if($boolean==false){
            $implodeUser=implode($splitUser);
            $motFinal+=substr($implodeUser,$i);
       } 
    }
    return $motFinal;
}

?>