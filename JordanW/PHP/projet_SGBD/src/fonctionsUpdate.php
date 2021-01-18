<?php

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

        return $tab;
    }

?>