<?php
function compteurVoyelle($string,$recherche){
    $compteVoyelle=0;
    
    for($i=0;$i<=strlen($string);$i++){
        for($j=0;$j<strlen($recherche);$j++){
            if(substr($string,$i,1)==substr($recherche,$j,1)){
                $compteVoyelle++;
            }
        }
     
    }   
    return $compteVoyelle;
}
function fPurge($string,$caracaPurger){
    $res="";

    for($i=0;$i<strlen($string);$i++){
        $boolean=false;
        for($j=0;$j<strlen($caracaPurger);$j++){
            if(substr($string,$i,1)==substr($caracaPurger,$j,1)){
                $boolean=true;
            }
        }
        if (!$boolean){
            $res.=substr($string,$i,1);
        }
    }
    return $res;
} 
?>