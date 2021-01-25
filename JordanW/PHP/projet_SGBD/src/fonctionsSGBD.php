<?php 

function f_testLoginMdp(string $log,string $mdp){ // Login/mdp
    
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

function f_extraireInstruction(string $instruction){ // Extraire l'instruction SQL
    
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
    }elseif(substr($instruction,0,4)=="HELP"){
        return "HELP";
    }else{
        return "ERROR";
    }
}

function f_testConcordance(string $table,string $parametres,string $carExplode){ // Concordance Nombre valeur / nombre champs
                        
    // tableau des parametres saisies
    $tabParametre=explode($carExplode,trim($parametres));
    // Ouvrir le fichier
    $fp = fopen(REP_BDD.$table.EXTENSION_BDD,"r");
    // stock la premiere ligne
    $tabEntete=explode(";",fgets($fp,4096));
    // ferme le fichier
    fclose($fp);
    
    // Recherche les concordances
    $i=0;
    foreach($tabParametre as $par){
        foreach($tabEntete as $entete){
            $par=preg_replace("#\n|\t|\r#","",$par);
            $entete=preg_replace("#\n|\t|\r#","",$entete);
            if($par==$entete){
                $i++;
            }
        }
    }
    // Si nombre de concondance != nombre parametre affichage
    if(count($tabParametre)!=$i){
        echo "Un ou plusieurs paramètres n'existent pas dans la table ".$table."\n";
        return false;
    }else{
        return true;
    }
}

function f_testConcordanceNombreChamps(string $table,array $tab){ // Concordance nom de champs dans la table
                        
    // Ouvrir le fichier
    $fp = fopen(REP_BDD.$table.EXTENSION_BDD,"r");
    // stock la premiere ligne
    $tabEntete=explode(";",fgets($fp,4096));
    // ferme le fichier
    fclose($fp);
    
    // Si nombre de concondance != nombre parametre affichage
    if(count($tab)!=count($tabEntete)){
        echo "Nombre de valeurs différent que le nombre de champs de la table ".$table."\n";
        return false;
    }else{
        return true;
    }
}

function f_testConcordanceTab(string $table,array $tab){ // Teste la concordance entre deux tableaux
                        
    // Ouvrir le fichier
    $fp = fopen(REP_BDD.$table.EXTENSION_BDD,"r");
    // stock la premiere ligne
    $tabEntete=explode(";",fgets($fp,4096));
    // ferme le fichier
    fclose($fp);
    
    // Recherche les concordances
    $i=0;
    foreach($tab as $par){
        foreach($tabEntete as $entete){
            $par=preg_replace("#\n|\t|\r#","",$par);
            $entete=preg_replace("#\n|\t|\r#","",$entete);
            if(trim($par)==trim($entete)){
                $i++;
            }
        }
    }
    // Si nombre de concondance != nombre parametre affichage
    if(count($tab)!=$i){
        echo "Un ou plusieurs paramètres n'existent pas dans la table ".$table."\n";
        return false;
    }else{
        return true;
    }
}

function f_testConcordanceTrie(string $table,string $param){ // Concordance entre 1 tableau et 1explode(string)
                        
    // Ouvrir le fichier
    $fp = fopen(REP_BDD.$table.EXTENSION_BDD,"r");
    // stock la premiere ligne
    $tabEntete=explode(";",fgets($fp,4096));
    $tabParametreTrie[0]=$param;
    fclose($fp);
    $i=0;
    foreach($tabEntete as $par){
        foreach($tabParametreTrie as $entete){
            $par=preg_replace("#\n|\t|\r#","",$par);
            $entete=preg_replace("#\n|\t|\r#","",$entete);
            if($par==$entete){
                $i++;
            }
        }
    }
    // Si nombre de concondance != nombre parametre affichage
    if(count($tabParametreTrie)!=$i){
        echo "Le parametre de trie n'existe pas dans la table ".$table."\n";
        return false;
    }else{
        return true;
    }
}

function f_testConcordanceWhere(string $table,array $tabParam){ // Concordance entre deux tableaux (Special WHERE)
                        
    // Ouvrir le fichier
    $fp = fopen(REP_BDD.$table.EXTENSION_BDD,"r");
    // stock la premiere ligne
    $tabEntete=explode(";",fgets($fp,4096));
    fclose($fp);
    $i=0;
    foreach($tabEntete as $par){
        foreach($tabParam as $entete){
            $par=preg_replace("#\n|\t|\r#","",$par);
            $entete=preg_replace("#\n|\t|\r#","",$entete);
            if($par==$entete){
                $i++;
            }
        }
    }

        // Si nombre de concondance != nombre parametre affichage
        if(count($tabParam)/2!=$i){
            echo "Le champ de la table ".$table ." après le WHERE n'existent pas."."\n";
            return false;
        }else{
            return true;
        }
}

function f_champsTropLong(array $tab,int $i){ // Teste la longueur < CONSTANTE
    $boolTropLong=false;
    // Test si strlen(valeur)>=constante
    foreach ($tab as $lig) {
        if(strlen($lig)>=$i){
            echo "Au moins une valeur est supérieure a la longueur autorisée (25caracteres) !!","\n";
            $boolTropLong=true;
        }
    }
    return $boolTropLong;
}

function f_testFichierExiste($table,bool $boolEcho){ // Existance d'un fichier
    $bool=true;
    $table=trim($table);
    if (file_exists(REP_BDD.$table.EXTENSION_BDD)==false){
        if($boolEcho){
            echo "La table ".$table." n'existe pas!"."\n";
        }
        $bool=false;
    }
    return $bool;
}

function f_fichierTab(string $table){ // Bascule le fichier dans un tableau

    $table=trim(REP_BDD.$table.EXTENSION_BDD);

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
                $tab[$i][$j]= preg_replace("#\n|\t|\r#","",$tab[$i][$j]);

                if($tab[$i][$j]!=null){
                    $tabSelectFrom[$i][$j]=$tab[$i][$j];
                }
            }
                
        }
    
    return $tabSelectFrom;
}

function f_trierTable(array &$tab,string $paramTrie,string $typeTrie){ // trie une table en fonction des parametres
    $tabEntete=[];
    $intColonneTrier=null;
    // Boucle sur les colonnes du fichier
    for ($j=0; $j < count($tab[0]); $j++){
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
        usort($tab,colonne_trie($intColonneTrier));
    }elseif($typeTrie=="DESC"){
        // On trie decroissant sur la colonne Order by
        //rsort($tab,intval(colonne_trie($intColonneTrier)));

        // Pour trier décroissant je trie croissant et j'inverse le tableau
        // Seul moyen trouvé pour trier décroissant un tableau non clé valeur
        usort($tab,colonne_trie($intColonneTrier));
        $tab=array_reverse($tab);

    }

    // On reconstitue le tableau avec l'entete
    array_unshift($tab,$tabEntete[0]);

    return $tab;
}

function f_caractereInterdit(string $saisie,string $type){ // renvoie true si caractere interdit
    $bool=false;
    if(preg_match("/[^a-z_\-0-9\s]/i", $saisie)){
        echo "Caracteres interdit dans ".$type." !"."\n";
        $bool=true;
    }
    return $bool;
}

function f_caractereInterditTab(array $tab,string $type){ // renvoie true si caractere interdit
    $bool=false;
    foreach($tab as $value){
        if(preg_match("/[^a-z_\-0-9\s]/i", $value)){
            echo "Caracteres interdit dans ".$type." !"."\n";
            return true;
        }
    }
    return $bool;
}

function f_MiseEnFormeTableau(array $tab){ // Affiche le tableau proprement
    
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

    for ($i=0; $i <count($tab) ; $i++){ 
        
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
            // Si pas d'autre ligne que l'entete, pas de ligne intermediaire
            echo "|";
            // Boucle sur les colonnes du fichier
            for ($j=0; $j < (count($tab[0])); $j++) { 
                echo f_tableMEP((intval($tabMEP[$j])),"―");
                if($j!=(count($tab[0])-1)){
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

function f_tableMEP(int $i,string $car){ // Affiche le nombre $i de caractere $car
    $return="";
    for ($j=0; $j < $i ; $j++) { 
        $return.=$car;
    }
    return $return;
}

function colonne_trie($key) {// Permet de sortir un n° colonne a trier
    return function ($a, $b) use ($key) {
        return strnatcmp($a[$key], $b[$key]);
    };
}

?>