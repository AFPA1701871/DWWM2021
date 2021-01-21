<?php
    function createTable($requeteSQL) {
        $donneesTable=substr($requeteSQL,13); // donne la valeur de la requete moins "CREATE TABLE "
        $posParanthese=strpos($donneesTable,"("); // donne la position de la première parenthese
        $nomTable=substr($donneesTable,0,$posParanthese); // donne le nom de la table à créer
        $listeChamps=substr($donneesTable,$posParanthese); // donne le contenu(liste des champs) à inserer dans la table
        $listeChamps=strtr($listeChamps, ",", ";")."\n"; //convertit les "," qui séparent les champs en ";"
        $listeChamps=substr($listeChamps,1); // supprimer la "(" au début de $listeChamps
        $posParanthese2=strrpos($listeChamps,")"); // donne la position de la dernière parenthese
        $listeChamps=substr($listeChamps,0,$posParanthese2); // supprimer la ")" à la fin de $listeChamps
        $listeChamps.=";"; // ajoute un ";" a la fin de la ligne de la table
        $listeChamps=str_replace("'", "", $listeChamps); // supprimer les "'" dans $listeChamps

        $chaineChamps=substr($listeChamps,0,strrpos($listeChamps,";"));

        $tableauChaineChamps=explode(";",$chaineChamps);
        sort($tableauChaineChamps);
        
        if ($nomTable!="") {

            if ($chaineChamps!="") {

                $CaracteresSpeciaux=false;
                for ($i=0; $i < count($tableauChaineChamps); $i++) { 
                    if (preg_match("#^[a-z0-9]+$#i" , $tableauChaineChamps[$i])) {
                    }
                    else {
                        $CaracteresSpeciaux=true;
                    }
                }

                if ($CaracteresSpeciaux==false) {

                    $champTropLong=false;
                    for ($i=0; $i < count($tableauChaineChamps) ; $i++) { 
                        if (strlen($tableauChaineChamps[$i])>25) {
                            $champTropLong=true;
                        }
                    }

                    if ($champTropLong==false) {
                    
                        $champEnDouble=false;
                        for ($i=0; $i < count($tableauChaineChamps)-1; $i++) { 
                            if ($tableauChaineChamps[$i]==$tableauChaineChamps[$i+1]) {
                                $champEnDouble=true;
                            }
                        }
                        if ($champEnDouble==false) {
                            $fp=fopen("./BDD/$nomTable.dwwm", "w"); // crée une table nommée $nomTable dans la base de données
                            fputs($fp, "$listeChamps\n"); //insère la liste des champs dans la table précédemment créée
                            fclose($fp); // clos la requête
                        }
                        else {
                            echo "requête invalide, deux champs ne peuvent pas avoir le même libellé!\n";
                        } 
                    }
                    else {
                        echo "requête invalide, les noms de champs ne doivent pas contenir plus de 25 caractères chacuns!\n";
                    }
                }
                else {
                    echo "requête invalide, les noms de champs ne doivent pas contenir de caractères spéciaux!\n";
                }
            }
            else {
                echo "requête invalide, il faut entrer au moins un champ!\n";
            }
        }
        else {
            echo "requête invalide, il faut entrer un nom de table!\n";
        }
    }
?>