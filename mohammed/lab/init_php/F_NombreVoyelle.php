<?php
function nombreVoyelle($mot){//entrez mot pour avoir le nombre de ses voyelles biensur en string pas oublier ""

     $tab=["a","i","e","o","u","y"]; 
     $mot = strtolower($mot);  
     $tab1=str_split($mot,1); 
     $compteur=0   ;
        for ($i=0; $i <count($tab); $i++) { 
            for ($j=0; $j <count($tab1); $j++) { 
                   if ($tab[$i]==$tab1[$j]){
                       $compteur++;                 
                    }
            }             
        }   
        echo  "le nombre de voyelles de votre mot est de  ". $compteur;
         return $compteur;
    }
    
        ?>