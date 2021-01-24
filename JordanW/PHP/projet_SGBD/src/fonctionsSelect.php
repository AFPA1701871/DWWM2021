<?php

    function f_selectFrom2(string $param,array $tab){
        
        $tabParametre=explode(",",$param);

        // Boucle sur les lignes du fichier
        for ($i=0; $i <count($tab) ; $i++) { 
            // Boucle sur mes parametres
            for ($intParam=0; $intParam <count($tabParametre) ; $intParam++) { 
                // Boucle sur les colonnes du fichier
                for ($j=0; $j < count($tab[0]); $j++) { 
                    // Enleve les retours lignes
                    $tab[$i][$j]= preg_replace("#\n|\t|\r#","",$tab[$i][$j]);
                    // Si existe valeur
                    if($tab[$i][$j]!=null){
                        // si parametre * on filtre pas on ajoute tout
                        if($tabParametre[$intParam]=="*"){
                            $tabSelectFrom[$i][$j]=$tab[$i][$j];
                        }else{
                            // ajoute uniquement si la colonne = parametre entre
                            if($tab[0][$j]==$tabParametre[$intParam]){
                                $tabSelectFrom[$i][$intParam]=$tab[$i][$j];
                            }
                        }
                    }
                }
                    
            }
        }
        return $tabSelectFrom;
    } 

    function f_selectFromWhere(string $param,array $tab,array $tabWhere){
        
        // Recherche la colonne du champ WHERE
        $intColonneWhere=-1;
        for ($j=0; $j < count($tab[0]); $j++) {
            if($tab[0][$j]==$tabWhere[0]){
                $intColonneWhere=$j;
                break;
            }
        }  
        $tabParametre=explode(",",$param);
        $intLigneSelectFromWhere=-1;
        // Boucle sur les lignes du fichier
        for ($i=0; $i <count($tab) ; $i++) {
            // Boucle sur mes parametres
            for ($intParam=0; $intParam <count($tabParametre) ; $intParam++) { 

                if($i==0 OR $tab[$i][$intColonneWhere]==$tabWhere[1]){
                    $intLigneSelectFromWhere++;
                    // Boucle sur les colonnes du fichier
                    for ($j=0; $j < count($tab[0]); $j++) { 

                        // Enleve les retours lignes
                        $tab[$i][$j]= preg_replace("#\n|\t|\r#","",$tab[$i][$j]);
                        
                        if($tab[$i][$j]!=null){
                            // si parametre * on filtre pas on ajoute tout
                            if($tabParametre[$intParam]=="*"){
                                    $tabSelectFrom[$intLigneSelectFromWhere][$j]=$tab[$i][$j];
                                }else{
                                    // ajoute uniquement si la colonne = parametre entre
                                    if($tab[0][$j]==$tabParametre[$intParam]){
                                        $tabSelectFrom[$intLigneSelectFromWhere][$j]=$tab[$i][$j];
                                        
                                    }
                                }
                            }
                        }
                    }
                    
            }
        }
        return $tabSelectFrom;
    } 

    function f_decoupageRequeteSelect(string &$saisie,string &$strParametres,string &$strInstruction2,string &$strTable){
        // Recuperer Parametres
        $strParametres=substr($saisie,0,striPos($saisie,"FROM "));
        // Raccourci la saisie
        $saisie=substr($saisie,strlen($strParametres));
        // Recuperer l'instruction2
        $strInstruction2=substr($saisie,0,strlen("FROM "));
        // Raccourci la saisie
        $saisie=substr($saisie,strlen($strInstruction2));
        // Recuperer la table
        $strTable=trim(substr($saisie,0,(strlen($saisie)-1)));
    
        $strParametres=TRIM($strParametres);
        $strInstruction2=TRIM($strInstruction2);
        $strTable=TRIM($strTable);
    }

    function f_decoupageOrderBy(string $saisie,string &$table,string &$paramTrie,string &$trie){
        
        $table=substr($saisie,0,striPos($saisie," Order by "));
        $saisie=substr($saisie,strlen($table)+strlen(" Order by "));

        // Recuperer le parametreTrie
        if(strtoupper(substr($saisie,-4))==" ASC"){
            $paramTrie=substr($saisie,0,-4);
            $trie="ASC";
        }elseif(strtoupper(substr($saisie,-5))==" DESC"){
            $paramTrie=substr($saisie,0,-5);
            $trie="DESC";
        }
    }
    
?>