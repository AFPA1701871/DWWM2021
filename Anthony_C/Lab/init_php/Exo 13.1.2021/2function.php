<?php
    //Fonction qui prend deux valeur d'entrer, le mot puis le caractère a purger.
    function purge($aValeur,$toPurge){
        $valeurPurged = "";
        //Boucle jusqu'a la longueur du mot.
        for ($i = 0; $i<strlen($aValeur); $i++){
            //Si la lettre en position $i du mot n'est pas égale au caractères a purger alors on met la lettre dans une autre valeur. 
            if (substr($aValeur,$i,1) != $toPurge) {
                $valeurPurged = $valeurPurged . substr($aValeur,$i,1);
            }
        }
    //On retourne le mot purger du caractère.
    return $valeurPurged;
    }
?>