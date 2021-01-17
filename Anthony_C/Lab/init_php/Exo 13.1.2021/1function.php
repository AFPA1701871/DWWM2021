<?php
    //Fonction qui cherche et dit le nombre de voyelles dans la valeur envoyer.
    function nbVoyelles($mot){
        //Split toutes les caractères de la valeur dans un tableau.
        $tabMot = str_split ($mot);
        $countVoyelles = 0;
        //Boucle jusqu'a la longueur de mon tableau et vérifie si le charactères est une voyelle ou non.
        foreach ($tabMot as $key){
            if ($key == "a" or $key == "e" or $key == "i" or $key == "o" or $key == "u" or $key == "y"){
                $countVoyelles += 1;
            }
        }
    echo "Le nombre de voyelle(s) dans votre mot est : $countVoyelles.\n";
    return $countVoyelles; 
    }
?>      
    