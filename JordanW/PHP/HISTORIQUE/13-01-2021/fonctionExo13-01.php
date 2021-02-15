<?php

function f_compteCaracterePresent(string $chaine,string $recherche){
    //Boucle sur la chaine saisie
    $compt=0;
    for ($i=0; $i < strlen($chaine); $i++) { 
        //Boucle sur la chaine recherche
        for ($j=0; $j <strlen($recherche) ; $j++) { 
            if (substr($chaine,$i,1)==substr($recherche,$j,1)){
                $compt++;
            }
        }
    }
    return $compt;
}

function f_purge(string $chaine,string $purge){
    //Boucle sur la chaine saisie
    $resultat="";
    for ($i=0; $i < strlen($chaine); $i++) { 
        $bool=false;
        //Boucle sur la chaine recherche
        for ($j=0; $j <strlen($purge) ; $j++) {
            if(substr($chaine,$i,1)==substr($purge,$j,1)){
                $bool=true;
            }
        }
        if(!$bool){
            $resultat .= substr($chaine,$i,1);
        }
    }

    return $resultat;
}

?>