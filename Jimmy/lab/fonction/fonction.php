<?php
//*****************************FONCTION VOYELLES*****************************//
    function voyelles($mots){                               
        $mots = str_split($mots,1);
        $nbVoyelles = 0;
        $voyelle = array ("a","e","i","o","u","y");

        foreach ($mots as $letter){
        if(in_array($letter, $voyelle))
            $nbVoyelles++;
        }   
        return $nbVoyelles;   
    }         
//*****************************FONCTION PURGE*****************************//                                  

    function purge($mots,$lettre){
        
        $mots = str_split($mots,1);
        $lettre = str_split($lettre,1);
        
        for ($i=0; $i < count($mots) ; $i++) {
             
            for ($j=0; $j < count($lettre); $j++) { 

                if ($mots[$i]==$lettre[$j]) {
                    $mots[$i]="";
                }
            }   
        }
        return implode($mots);
    }
 //***********************************************************************//   
?>