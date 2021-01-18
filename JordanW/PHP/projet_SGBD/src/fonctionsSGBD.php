<?php 

function f_testLoginMdp(string $log,string $mdp){
    
    //Ouvrir le fichier config.ini
    $fp = fopen(REP_BDD."config.ini", "r");
    
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
    $instruction=strtoupper($instruction);
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
    }elseif(substr($instruction,0,12)=="DELETE FROM "){
        return "DELETE FROM ";
    }elseif(substr($instruction,0,11)=="DROP TABLE "){
        return "DROP TABLE ";
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

function f_testConcordance2Tab(array $tab1,array $tab2){
    $i=0;
    foreach($tab1 as $par){
        foreach($tab2 as $entete){
            $par=preg_replace("#\n|\t|\r#","",$par);
            $entete=preg_replace("#\n|\t|\r#","",$entete);
            if($par==$entete){
                $i++;
            }
        }
    }
    return $i;
}

function f_fichierTab(string $table){
    // apres avoir bouclé, reaffecter proprement dans un tableau
    $fp=fopen($table,"r");
    
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
            for ($j=0; $j < count($tab[0]); $j++) { 
                
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
    for ($j=0; $j < count($tab[0]); $j++) {
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
    for ($j=0; $j <count($tab[0]) ; $j++) { 
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