<?php
function FPurgePersonalise ($mot,$lettrePurge){//argument1 = mot et arg2=lettre a retirer du mot "string biensur "
    if (strlen($lettrePurge) >= 2) {    // verification que c est une seul lettre
        while (strlen($lettrePurge) >= 2) {
        $lettrePurge=readline( "entrez une seul lettre dans l'argument ");
        }
    }
        $lettrePurge = strtolower($lettrePurge);//convertir le mot en miniscule
        $tab=str_split($lettrePurge,1);//mettre une chaine de caractere en tableau
        $mot = strtolower($mot);  
         $tab1=str_split($mot,1); 
                for ($j=0; $j <count($tab1); $j++) { 
                    if ($lettrePurge==$tab1[$j]){
                         $tab1[$j]="";               
                    }
                 }             
                
        echo implode($tab1);
        return implode($tab1);
    }
    

        ?>