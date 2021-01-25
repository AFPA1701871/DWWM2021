<?php
function FPurgePersonalise ($mot,$lettrePurge){//entrez mot pour avoir le nombre de ses voyelles biensur en string pas oublier ""
    $lettrePurge = strtolower($lettrePurge);
     $tab=str_split($lettrePurge);
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
    
        ?>