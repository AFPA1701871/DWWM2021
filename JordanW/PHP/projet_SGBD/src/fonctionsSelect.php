<?php

    function f_selectFrom2(string $param,array $tab){
        
        $tabParametre=explode(",",$param);

        // Boucle sur mes parametres
        for ($intParam=0; $intParam <count($tabParametre) ; $intParam++) { 
            // Boucle sur les lignes du fichier
            for ($i=0; $i <count($tab) ; $i++) { 
                // Boucle sur les colonnes du fichier
                //for ($j=0; $j < count(array_keys($tab)); $j++) { 
                for ($j=0; $j < count($tab[0]); $j++) { 

                    // Enleve les retours lignes
                    $tab[$i][$j]= str_replace("\n","",$tab[$i][$j]); 
                    $tab[$i][$j] = str_replace("\r","",$tab[$i][$j]);

                    if($tab[$i][$j]!=null){
                        // si parametre * on filtre pas on ajoute tout
                        if($tabParametre[$intParam]=="*"){
                            $tabSelectFrom[$i][$j]=$tab[$i][$j];
                        }else{
                            // ajoute uniquement si la colonne = parametre entre
                            if($tab[0][$j]==$tabParametre[$intParam]){
                                $tabSelectFrom[$i][$j]=$tab[$i][$j];
                            }
                        }
                    }//else{
                        //echo "null";
                    //}
                }
                    
            }
        }
        return $tabSelectFrom;
    } 

    function f_selectFromWhere(string $param,array $tab,array $tabWhere){
        
        $intColonneWhere=-1;
        for ($j=0; $j < count($tab[0]); $j++) {
            if($tab[0][$j]==$tabWhere[0]){
                $intColonneWhere=$j;
                break;
            }
        }  
        $tabParametre=explode(",",$param);
        $intLigneSelectFromWhere=-1;
        // Boucle sur mes parametres
        for ($intParam=0; $intParam <count($tabParametre) ; $intParam++) { 
            // Boucle sur les lignes du fichier
            for ($i=0; $i <count($tab) ; $i++) {

                if($i==0 OR $tab[$i][$intColonneWhere]==$tabWhere[1]){
                    $intLigneSelectFromWhere++;
                    // Boucle sur les colonnes du fichier
                    for ($j=0; $j < count($tab[0]); $j++) { 

                        // Enleve les retours lignes
                        $tab[$i][$j]= str_replace("\n","",$tab[$i][$j]); 
                        $tab[$i][$j] = str_replace("\r","",$tab[$i][$j]);
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

    function f_decoupageRequeteSelect(string $saisie,string &$strParametres,string &$strInstruction2,string &$strTable){
        // Recuperer Parametres
        $strParametres=substr($saisie,0,striPos($saisie,"FROM "));
        // Raccourci la saisie
        $saisie=substr($saisie,strlen($strParametres));
        // Recuperer l'instruction2
        $strInstruction2=substr($saisie,0,strlen("FROM "));
        // Raccourci la saisie
        $saisie=substr($saisie,strlen($strInstruction2));
        // Recuperer la table
        $strTable=substr($saisie,0,(strlen($saisie)-1));
    
        $strParametres=TRIM($strParametres);
        $strInstruction2=TRIM($strInstruction2);
        $strTable=TRIM($strTable);
    }

?>