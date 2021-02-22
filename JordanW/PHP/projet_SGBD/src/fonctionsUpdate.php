<?php

    function f_testUpdateSet(string $saisie){// Test si SET est OK
        $bool=false;
        if(striPos($saisie,"SET ")===false){
            // Il n'y a pas de SET
            echo "La requete doit contenir \"SET \" !!"."\n";
            $bool=true;
        }
        // Test si rien entre UPDATE et SET
        if(striPos($saisie,"SET ")=== 0){
            echo "La requete ne comporte aucune table !!"."\n";
            $bool=true;
        }
        return $bool;
    }

    function f_decoupageUpdateWhere(string $saisie,array &$tab1,array &$tab2){
        // recuperer champ=rchamp =>  autant de fois qu'il y en a
        $tab1=explode(",",substr($saisie,0,stripos($saisie," WHERE ")));

        // recuperer apres WHERE
        $tab2 = explode("=",substr($saisie,stripos($saisie," WHERE ")+7));
    }

    function f_decoupageUpdate(string &$saisie,string &$table){
        // Le nom de la table
        
        $table=trim(substr($saisie,0,striPos($saisie," SET ")));
        $saisie=substr($saisie,strlen($table));

        // Les parametres APRES SET 
        $saisie=substr($saisie,5,-1);
    }

    function f_updateSet(array $tabParam,array &$tab,string $table){
        
        // Boucle sur mes parametres (champs d'entree)
        for ($intParam=0; $intParam <count($tabParam) ; $intParam++) { 
            $intColonneModifier=-1;
            // Trouve le n° colonne correspondant a mon champ d'entree
            for ($j=0; $j < count($tab[0]); $j++) {
                if($tab[0][$j]==$tabParam[$intParam][0]){
                    $intColonneModifier=$j;
                    break;
                }
            }
            // Boucle sur les lignes du fichier
            for ($i=0; $i <count($tab) ; $i++) { 
                
                // Chaque ligne autre que l'entete => on modifie la $tab[$i][$intColonneModifier] par $tabParam[$intParam][1]
                if($i>0){
                    $tab[$i][$intColonneModifier]=$tabParam[$intParam][1];
                }
            }
        }

        // Retranscrire le tableau dans le fichier
        // Ouvre le fichier
        $fp = fopen(REP_BDD.$table.EXTENSION_BDD,"w");
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

        return $tab;
    } 

    function f_updateSetWhere(array $tabParam,array &$tab,string $table,array $tabWhere){
        
        $intColonneWhere=-1;
        for ($j=0; $j < count($tab[0]); $j++) {
            if($tab[0][$j]==$tabWhere[0]){
                $intColonneWhere=$j;
                break;
            }
        }  

        // Boucle sur mes parametres (champs d'entree)
        for ($intParam=0; $intParam <count($tabParam) ; $intParam++) { 
            
            // Trouve le n° colonne correspondant a mon champ d'entree
            $intColonneModifier=-1;
            for ($j=0; $j < count($tab[0]); $j++) {
                if($tab[0][$j]==$tabParam[$intParam][0]){
                    $intColonneModifier=$j;
                    break;
                }
            }

            // Boucle sur les lignes du fichier
            for ($i=0; $i <count($tab) ; $i++) { 
                
                // Chaque ligne autre que l'entete => on modifie la $tab[$i][$intColonneModifier] par $tabParam[$intParam][1]
                if($i>0){
                    if($tab[$i][$intColonneWhere]==$tabWhere[1]){
                        $tab[$i][$intColonneModifier]=$tabParam[$intParam][1];
                    }
                }
            }
        }
        

        // Retranscrire le tableau dans le fichier
        // Ouvre le fichier
        $fp = fopen(REP_BDD.$table.EXTENSION_BDD,"w");
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

        return $tab;
    }

?>