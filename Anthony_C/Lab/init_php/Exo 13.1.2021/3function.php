<?php
    //Fonction qui prend deux valeur d'entrer, le mot puis les caractères a purger.
    function purgeChaineCaracters($aValeur,$toPurge){
        $valeurPurged = "";
        //Boucle jusqu'a la longueur le mot envoyer puis crée un boolean initialiser a true chaque tour.
        for ($i = 0; $i<strlen($aValeur); $i++){
            $stock = true;
            //Boucle sur toutes les caractères a purger et check si la lettre $i du mot est l'un de ces caractères, si oui alors le boolean passe a false.
            for ($j =0; $j<strlen($toPurge); $j++){
                if (substr($aValeur,$i,1) == substr($toPurge,$j,1)){
                    $stock = false;
                }
            }
            //Si le boolean == true alors il écrit la lettre $i du mot.
            if ($stock == true){
                $valeurPurged = $valeurPurged . substr($aValeur,$i,1);
            }
        }
        //A la fin de la boucle renvoie le mot purger.
        return($valeurPurged);
    }
?>