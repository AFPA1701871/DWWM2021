<?php

//Recherche de voyelles dans une chaîne de caractère
function voyelles($mot) {
    $compteur = 0;
    //$tabMot = [$mot];
    $tabVoyelles = ["a", "e","i","o","u","y"];
    for ($i=0; $i < strlen($mot) ; $i++) { 
        for ($j=0; $j < count($tabVoyelles); $j++) { 
            if (substr($mot,$i,1) == $tabVoyelles[$j]) {
                $compteur++;
            }
        }
    }
    //echo "Le nombre de voyelle est :".$compteur;
    return $compteur;
}

//Fonction purge simple
function prugeSimple($chaine1,$chaine2){
        
    //Mettre la chaine en minuscule
    $chaine1 = strtolower($chaine1);
    $chaine1 = str_split($chaine1);

    //On fait la même chose avec la valeur à purger
    $chaine2 = strtolower($chaine2);
    $chaine2 = str_split($chaine2);

    //Purge simple
    for ($i=0; $i < count($chaine1) ; $i++) { 
        if (substr($chaine1,$i,1) != $chaine2) {
            $supprimer = $supprimer.substr($chaine1,$i,1);
        }
    }
    echo $chaine1;
    return $supprimer;

}







//Fonction Multipurge
function purge($chaine1, $chaine2){
    
    //Mettre la chaine en minuscule
    $chaine1 = strtolower($chaine1);
    $chaine1 = str_split($chaine1);

    //On fait la même chose avec la valeur à purger
    $chaine2 = strtolower($chaine2);
    $chaine2 = str_split($chaine2);

    for ($i=0; $i < count($chaine1); $i++) { 
       for ($j=0; $j < count($chaine2) ; $j++) { 
           if ($chaine1[$i] == $chaine2[$j]) {
               $chaine1[$i]="";
           }
       }
    }
    //on refait une chaine de caractère
    $chaine1 = implode($chaine1);
    return $chaine1;
}

?>

