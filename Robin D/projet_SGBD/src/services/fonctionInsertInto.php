<?php
    function insertInto($requeteSQL) {
        $contenuRequete=substr($requeteSQL,12); // donne la valeur de la requete moins "INSERT INTO "
        $posValues=strpos($contenuRequete," VALUES"); // donne la position du mot " VALUES"
        $nomTable=substr($contenuRequete,0,$posValues); // donne le nom de la table à modifier
        $valeursAEntrer=substr($contenuRequete,$posValues+7); // donne le contenu(valeur des champs) à inserer dans la table
        $valeursAEntrer=strtr($valeursAEntrer, ",", ";")."\n"; //convertit les "," qui séparent les valeurs en ";"
        $valeursAEntrer=substr($valeursAEntrer,1); // supprimer la "(" au début de $valeursAEntrer
        $posParanthese2=strrpos($valeursAEntrer,")"); // donne la position de la dernière parenthese
        $valeursAEntrer=substr($valeursAEntrer,0,$posParanthese2); // supprimer la ")" à la fin de $valeursAEntrer
        $valeursAEntrer.=";"; // ajoute un ";" a la fin de la ligne de la table
        $valeursAEntrer=str_replace("'", "", $valeursAEntrer); // supprimer les "'" dans $valeursAEntrer

        $chaineValeurs=substr($valeursAEntrer,0,strrpos($valeursAEntrer,";"));

        $tableauChaineValeurs=explode(";",$chaineValeurs);
        sort($tableauChaineValeurs);

        if ($nomTable!="") {
            if ($chaineValeurs!="") {
                     
                $valeurTropLong=false;
                for ($i=0; $i < count($tableauChaineValeurs) ; $i++) { 
                    if (strlen($tableauChaineValeurs[$i])>25) {
                        $valeurTropLong=true;
                    }
                }

                if ($valeurTropLong==false) {
                    
                    $fp=fopen("./BDD/$nomTable.dwwm", "a"); // ouvre la table nommée $nomTable dans la base de données
                    fputs($fp, "$valeursAEntrer\n"); //insère les valeurs dans la table précédemment créée
                    fclose($fp); // clos la requête

                }
                else {
                    echo "requête invalide, les noms de valeurs ne doivent pas contenir plus de 25 caractères chacuns!\n";
                }

            }
            else {
                echo "requête invalide, il faut entrer au moins une valeur!\n";
            }
        }
        else {
            echo "requête invalide, il faut entrer un nom de table!\n";
        }




        
    }
?>