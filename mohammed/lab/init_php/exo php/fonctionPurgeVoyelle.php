<?php
 function purgeVoyelle($mot){//entrez mot a purger de ses voyelle biensur en string pas oublier ""
     $tab=["a","i","e","o","u","y"]; 
     $mot = strtolower($mot);  
     $tab1=str_split($mot,1);    
        for ($i=0; $i <count($tab); $i++) { 
            for ($j=0; $j <count($tab1); $j++) { 
                   if ($tab[$i]==$tab1[$j]){
                       $tab1[$j]="";               
                    }
            }             
        }   
        echo implode($tab1);
        return implode($tab1);
    }
 purgeVoyelle("Amine");

?>