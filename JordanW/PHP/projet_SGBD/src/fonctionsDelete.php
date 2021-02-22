<?php

    function f_decoupageDelete(string &$saisie,string &$table,string &$condition){
        // Le nom de la table
        $table=substr($saisie,0,striPos($saisie," WHERE "));
        $saisie=substr($saisie,strlen($table)+strlen(" WHERE "));

        // Condition WHERE
        $condition=substr($saisie,0,-1);
    }

    function f_deleteFrom(string $table,array &$tab,array $tabcondition){
        
        $table=REP_BDD.trim($table).EXTENSION_BDD;

        if(empty($tab)){      
            // Boucle sur les lignes du fichier
            for ($i=0; $i <count($tab) ; $i++) { 
                // Chaque ligne autre que l'entete => on supprime
                if($i>0){
                    unset($tab[$i]);
                    $tab=array_values($tab);
                }
            }
            echo "La table ".pathinfo($table, PATHINFO_FILENAME)." a été vidée."."\n";
        }else{
            
            // Recherche n° colonne de la condition dans entete
            $intColonneWhere=-1;
            for ($j=0; $j < count($tab[0]); $j++) {
                if($tab[0][$j]==$tabcondition[0][$j]){
                    $intColonneWhere=$j;
                    break;
                }
            }  

            // Boucle sur les lignes du fichier
            for ($i=0; $i <count($tab) ; $i++) { 
                
                // Chaque ligne autre que l'entete => on recherche la condition
                if($i>0){
                    if($tab[$i][$intColonneWhere]==$tabcondition[0][1]){
                        unset($tab[$i]);
                        $tab=array_values($tab);
                    }
                }
            }
            
            

            // Retranscrire le tableau dans le fichier
            // Ouvre le fichier
            $fp = fopen($table,"w");
            // Vider le fichier
            ftruncate($fp,0);
            $i=0;
            foreach ($tab as $ligne) {
                if($i==0){
                    fwrite($fp,implode(";",$ligne));
                }else{
                    fwrite($fp,"\n".implode(";",$ligne));
                }
                $i++;
            }

            fclose($fp);
        }
        return $tab;

    }

    function f_dropTable(string $table){
        $table=REP_BDD.trim($table).EXTENSION_BDD;
        unlink($table);
        echo "La table ".pathinfo($table, PATHINFO_FILENAME)." a été supprimée."."\n";
    }

?>