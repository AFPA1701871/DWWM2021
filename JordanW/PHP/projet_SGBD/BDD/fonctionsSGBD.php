<?php 

function f_testLoginMdp(string $log,string $mdp){
    
    //Ouvrir le fichier config.ini
    $fp = fopen("config.ini", "r");
    
    $tabLigne=[];
    $bool=false;
    $i=0;
    //Boucler sur valeurs des lignes dans un tableau
    while(!feof($fp)){
        $tabLigne=explode(";",fgets($fp,4096));
        // Test si correspondance avec login mdp
        if ($i>0 && $tabLigne[0]==$log && $tabLigne[1]==$mdp){
            $bool=true;
        }
        $i++;
    }
    return $bool;
}

function f_extraireInstruction(string $instruction){
    
    // Test 12 premiers caracteres 'CREATE TABLE '
    if(substr($instruction,0,13)==="CREATE TABLE "){
        return "CREATE TABLE ";
    // Test 11 premiers caracteres 'INSERT INTO '   
    }elseif(substr($instruction,0,12)==="INSERT INTO "){
        return "INSERT INTO ";
    // Test 7 premiers caracteres 'SELECT '
    }elseif(substr($instruction,0,7)==="SELECT "){
        return "SELECT ";
    }elseif(substr($instruction,0,7)=="UPDATE "){
        return "UPDATE ";
    }else{
        return "ERROR";
    }
}

function f_extraireParametres(string $instruction){
    
    // Test 12 premiers caracteres 'CREATE TABLE '
    if(substr($instruction,0,12)==="CREATE TABLE "){
        return "CREATE TABLE ";
    // Test 11 premiers caracteres 'INSERT INTO '   
    }elseif(substr($instruction,0,11)==="INSERT INTO "){
        return "INSERT INTO ";
    // Test 7 premiers caracteres 'SELECT '
    }elseif(substr($instruction,0,7)==="SELECT "){
        return "SELECT ";
    }else{
        return "ERROR";
    }
}

function f_decoupageRequeteSelect(string $saisie,string &$strParametres,string &$strInstruction2,string &$strTable){
    // Recuperer Parametres
    $strParametres=substr($saisie,0,strPos($saisie,"FROM "));
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

function f_testConcordance2Tab(array $tab1,array $tab2){
    $i=0;
    foreach($tab1 as $par){
        foreach($tab2 as $entete){
            if(trim($par)==trim($entete)){
                $i++;
            }
        }
    }
    return $i;
}

function f_insertInto(string $param,string $table){
     // Ouvre un fichier pour lire un contenu existant
    $contenu= file_get_contents($table.".dwwm");
    // Ajoute la ligne d'entete
    $contenu .= "\n".$param;
    // Écrit le résultat dans le fichier
    file_put_contents($table.".dwwm", $contenu);

    echo "Les valeurs ont été enregistrées dans la table ".$table."\n";
}

function f_createTable(string $nomFichier,string $param){

    // Ouvre et insere l'entete
    file_put_contents($nomFichier, $param);
    
    echo "La table  ". substr($nomFichier,0,(strlen($nomFichier)-5)). " a bien été créée "."\n";
}

function f_updateSet(array $tabParam,array &$tab,string $table){
    
    // Boucle sur mes parametres (champs d'entree)
    for ($intParam=0; $intParam <count($tabParam) ; $intParam++) { 
        $intColonneModifier=-1;
        // Trouve le n° colonne correspondant a mon champ d'entree
        for ($j=0; $j < count(array_keys($tab)); $j++) {
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
    $fp = fopen($table.".dwwm","w");
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
    for ($j=0; $j < count(array_keys($tab)); $j++) {
        if($tab[0][$j]==$tabWhere[0]){
            $intColonneWhere=$j;
            break;
        }
    }  

    // Boucle sur mes parametres (champs d'entree)
    for ($intParam=0; $intParam <count($tabParam) ; $intParam++) { 
        
        // Trouve le n° colonne correspondant a mon champ d'entree
        $intColonneModifier=-1;
        for ($j=0; $j < count(array_keys($tab)); $j++) {
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
    $fp = fopen($table.".dwwm","w");
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

function f_selectFrom2(string $param,array $tab){
    
    $tabParametre=explode(",",$param);

    // Boucle sur mes parametres
    for ($intParam=0; $intParam <count($tabParametre) ; $intParam++) { 
        // Boucle sur les lignes du fichier
        for ($i=0; $i <count($tab) ; $i++) { 
            // Boucle sur les colonnes du fichier
            for ($j=0; $j < count(array_keys($tab)); $j++) { 

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
    for ($j=0; $j < count(array_keys($tab)); $j++) {
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
                for ($j=0; $j < count(array_keys($tab)); $j++) { 

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

function f_fichierTab(string $table){
    // apres avoir bouclé, reaffecter proprement dans un tableau
    $fp=fopen($table.".dwwm","r");
    
    $i=0;
    // Boucle sur le fichier
    while(!feof($fp)){
        $tab[$i]=explode(";",fgets($fp,4096));
        $i++;
    }
    fclose($fp);
   
        // Boucle sur les lignes du fichier
        for ($i=0; $i <count($tab) ; $i++) { 
            // Boucle sur les colonnes du fichier
            for ($j=0; $j < count(array_keys($tab)); $j++) { 
                
                // Enleve les retours lignes
                $tab[$i][$j]= str_replace("\n","",$tab[$i][$j]); 
                $tab[$i][$j] = str_replace("\r","",$tab[$i][$j]);
                if($tab[$i][$j]!=null){
                    $tabSelectFrom[$i][$j]=$tab[$i][$j];
                }
            }
                
        }
    
    return $tabSelectFrom;
}

function f_trierTable(array &$tab,string $paramTrie,string $typeTrie){
    $tabEntete=[];
    $intColonneTrier=null;
    // Boucle sur les colonnes du fichier
    for ($j=0; $j < count(array_keys($tab)); $j++) {
        if ($tab[0][$j]!=null){
            $tabEntete[0][$j]=$tab[0][$j];
        }
        if($tab[0][$j]==$paramTrie){
            $intColonneTrier=intval($j);
        }
    }
    // On enleve la ligne des entetes
    unset($tab[0]);

    if($typeTrie=="ASC"){
        // On trie croissant sur la colonne Order by
        usort($tab,build_sorter($intColonneTrier));
    }elseif($typeTrie=="DESC"){
        // On trie decroissant sur la colonne Order by
        rsort($tab,intval(build_sorter($intColonneTrier)));
    }

    // On reconstitue le tableau avec l'entete
    array_unshift($tab,$tabEntete[0]);
    return $tab;
}

function build_sorter($key) {
    return function ($a, $b) use ($key) {
        return strnatcmp($a[$key], $b[$key]);
    };
}

function f_MiseEnFormeTableau(array $tab){
    
    // Boucle sur les colonnes du fichier
    for ($j=0; $j <count(array_keys($tab)) ; $j++) { 
        // Boucle sur les lignes du fichier
        $intLongeur =0;
        for ($i=0; $i < count($tab); $i++) { 
            
            // Si la len(colonne) > len(colonne+1)
            if(strlen($tab[$i][$j])>$intLongeur){
                $intLongeur= strlen($tab[$i][$j]);
            }
        }
        $tabMEP[$j]=$intLongeur;
    }

    // Premiere ligne requete
    echo " ";
    // Boucle sur les colonnes du fichier
    for ($j=0; $j < (count($tab[0])); $j++) { 
        echo f_tableMEP((intval($tabMEP[$j])),"_");
        if($j!=(count($tab[0]))-1){
            echo "_";
        }
    }
    echo " "."\n";
    
    for ($i=0; $i <count($tab) ; $i++) { 
        echo "|";
        // Boucle sur les colonnes du fichier
        for ($j=0; $j < (count($tab[0])); $j++) { 
            echo $tab[$i][$j] . f_tableMEP((intval($tabMEP[$j]))-strlen($tab[$i][$j])," ");
            if($j!=(count($tab[0]))-1){
                echo "┆";
            }
        }
        echo "|"."\n";
        
        // Affiche la ligne intermediaire
        if ($i==0){
            echo "|";
            // Boucle sur les colonnes du fichier
            for ($j=0; $j < (count($tab[0])); $j++) { 
                echo f_tableMEP((intval($tabMEP[$j])),"―");
                if($j!=(count($tab[0]))-1){
                    echo "┆";
                }
            }
            echo "|"."\n";
        }elseif($i==count($tab)-1){
            echo " ";
            // Boucle sur les colonnes du fichier
            for ($j=0; $j < (count($tab[0])); $j++) { 
                echo f_tableMEP((intval($tabMEP[$j])),"‾");
                if($j!=(count($tab[0]))-1){
                    echo "‾";
                }
            }
            echo " "."\n";
        }else{
            echo "|";
            // Boucle sur les colonnes du fichier
            for ($j=0; $j < (count($tab[0])); $j++) { 
                echo f_tableMEP((intval($tabMEP[$j])),"-");
                if($j!=(count($tab[0]))-1){
                    echo "┆";
                }
            }
            echo "|"."\n";
        }
    }
    
} 

function f_tableMEP(int $i,string $car){
    $return="";
    for ($j=0; $j < $i ; $j++) { 
       $return.=$car;
    }
    return $return;
}

?>