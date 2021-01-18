<?php 

require("fonctionsSGBD.php");
define("PREFIXE","SQL :> ");
define("REP_BDD","../BDD/");
define("EXTENSION_BDD",".dwwm");

/*do{

    $login = readline("Saisir le login : ");
    if($login=="quit"){
        exit();
    }
    $mdp = readline("Saisir le mot de passe : ");
    if($mdp=="quit"){
        exit();
    }
} while(f_testLoginMdp($login,$mdp)==false);*/

while(true){

    $saisie = readline(PREFIXE);
    // Quitte le programme
    if($saisie =="quit"){
        exit();
    }

    //Test si termine par ;
    if(substr($saisie,strlen($saisie)-1,1)!=";"){
        echo "Une requete se termine toujours par ;"."\n";
    }else{

        switch (f_extraireInstruction($saisie)) {
            case "SELECT ":

                // extrait chaine entre select et FROM
                $strInstruction = f_extraireInstruction($saisie);
                // Raccourci la saisie
                $saisie = substr($saisie,strlen($strInstruction));

                // Test si FROM est OK
                if(strPos($saisie,"FROM ")===false && strPos($saisie,"from ")===false){
                    // Il n'y a pas de FROM
                    echo "La requete ". $strInstruction ." doit contenir \"FROM \" !!"."\n";
                    break;
                }
                // Test si rien entre SELECT et FROM
                if(strPos($saisie,"FROM ")=== 0){
                    echo "La requete ne comporte aucun parametre d'affichage !!"."\n";  
                    break;
                }

                $strParametres="";
                $strInstruction2="";
                $strTable="";

                // Decoupe la variable saisie pour obtenir les variables de la requetes
                f_decoupageRequeteSelect($saisie,$strParametres,$strInstruction2,$strTable);
                
                $saisie=$strTable;



                // SELECT FROM WHERE

                $boolWhere=false;
                // Test si SELECT FROM WHERE existe
                 if(strPos($saisie," WHERE ")!=false){
                     
                     $boolWhere=true;
                     // récupere la table
                    $strTable=trim(substr($saisie,0,strPos($saisie," WHERE ")));
                    $saisie=substr($saisie,strlen($strTable)+strlen(" WHERE "));
                
                    $boolTrie=false;
                    // Test si SELECT FROM WHERE Order by
                    if(strPos($saisie," Order by ")!=false){
                        // si existe tester si ASC ou DESC existe a la fin
                        if(substr($saisie,-3)!="ASC" && substr($saisie,-4)!="DESC"){
                            echo "Le Order by doit absolument être couplé avec ASC ou DESC !!"."\n";
                            break;
                        }
                        $boolTrie=true;

                        // Recuperer ChampsWhere
                        $strChampWhere=trim(substr($saisie,0,strPos($saisie," Order by ")));
                        $tabChampsWhere=explode("=",$strChampWhere);

                        $saisie=substr($saisie,strlen($strTable)+strlen(" Order by "));
                        // Recuperer le parametreTrie
                        if(substr($saisie,-4)==" ASC"){
                            $strParametreTrie=substr($saisie,0,-4);
                            $strTrie="ASC";
                        }elseif(substr($saisie,-5)==" DESC"){
                            $strParametreTrie=substr($saisie,0,-5);
                            $strTrie="DESC";
                        }
                    }else{
                        // Recuperer ChampsWhere
                        $strChampWhere=trim(substr($saisie,0));
                        $tabChampsWhere=explode("=",$strChampWhere);
                    }

                    // Test si ChampsWhere existe
                    $fp = fopen(REP_BDD.$strTable.EXTENSION_BDD,"r");
                    // stock la premiere ligne
                    $tabEntete=explode(";",fgets($fp,4096));

                    // Test de concordance entre nb concordance et nb parametre
                    if (count($tabChampsWhere)/2!=f_testConcordance2tab($tabEntete,$tabChampsWhere)){
                        echo "Le champ de trie WHERE n'existe pas dans la table ".$strTable."\n";
                        fclose($fp);
                        break;
                    }
                    fclose($fp);

                 }else{

                     $boolTrie=false;
                     // Test si Order by existe
                     if(strPos($saisie," Order by ")!=false){
                         // si existe tester si ASC ou DESC existe a la fin
                         if(substr($saisie,-3)!="ASC" && substr($saisie,-4)!="DESC"){
                             echo "Le Order by doit absoument être couplé avec ASC ou DESC !!"."\n";
                             break;
                            }
                            
                            // ORDER BY
                            $boolTrie=true;

                            // Recuperer la table
                            $strTable=trim(substr($saisie,0,strPos($saisie," Order by ")));
                            $saisie=substr($saisie,strlen($strTable)+strlen(" Order by "));
                            // Recuperer le parametreTrie
                            if(substr($saisie,-4)==" ASC"){
                                $strParametreTrie=substr($saisie,0,-4);
                                $strTrie="ASC";
                            }elseif(substr($saisie,-5)==" DESC"){
                                $strParametreTrie=substr($saisie,0,-5);
                                $strTrie="DESC";
                            }
                    }
                        
                }

                // test si table existe deja
                if (file_exists(REP_BDD.$strTable.EXTENSION_BDD)== false) {
                    echo "La table ".$strTable." n'éxiste pas !!"."\n";
                    break;
                }

                // Test en fonction des parametres
                if($strParametres!="*"){
                    // tableau des parametres saisies
                    $tabParametre=explode(",",trim($strParametres));
                    // Ouvrir le fichier
                    $fp = fopen(REP_BDD.$strTable.EXTENSION_BDD,"r");
                    // stock la premiere ligne
                    $tabEntete=explode(";",fgets($fp,4096));
                    
                    
                    // Test de concordance entre parametre et parametreTrie
                    if (count($tabParametre)!=f_testConcordance2tab($tabParametre,$tabEntete)){
                        echo "Un ou plusieurs paramètres n'existent pas dans la table ".$strTable."\n";
                        fclose($fp);
                        break;
                    }

                }


                // Test si parametreTrie existe
                if($boolTrie){
                    // Ouvrir le fichier
                    $fp = fopen(REP_BDD.$strTable.EXTENSION_BDD,"r");
                    // stock la premiere ligne
                    $tabEntete=explode(";",fgets($fp,4096));
                    $tabParametreTrie[0]=$strParametreTrie;
                    
                    // Test de concordance entre nb concordance et nb parametre
                    if (count($tabParametreTrie)!=f_testConcordance2tab($tabEntete,$tabParametreTrie)){
                        echo "Le parametre de trie n'existe pas dans la table ".$strTable."\n";
                        fclose($fp);
                        break;
                    }
                    fclose($fp);

                }

                // récupere la table et le stocke dans un tableau
                $tabRequete=f_fichierTab(REP_BDD.$strTable.EXTENSION_BDD);

                // si order by on le trie en fonction du parametre
                if($boolTrie==true){
                    $tabRequete=f_trierTable($tabRequete,$strParametreTrie,$strTrie);
                }

                if($boolWhere){
                    // Filtre sur les entetes a afficher
                    $tabSelectFrom = f_selectFromWhere($strParametres,$tabRequete,explode("=",$strChampWhere));
                }else{
                    // Filtre sur les entetes a afficher
                    $tabSelectFrom = f_selectFrom2($strParametres,$tabRequete);
                }
                // Afficher le tableau
                f_MiseEnFormeTableau($tabSelectFrom);
                break;
 
            case "INSERT INTO ":

                if(substr($saisie,strlen($saisie)-2)!=");"){
                    echo "Une requete INSERT INTO se termine toujours par );"."\n";
                    break;
                }

                // extrait chaine entre INSERT INTO et VALUES(
                $strInstruction = f_extraireInstruction($saisie);
                // Raccourci la saisie
                $saisie = substr($saisie,strlen($strInstruction));

                // Test si CREATE TABLE contient ( ou )
                if(strPos($saisie,"VALUES(")===false OR strPos($saisie,")")===false){
                    // Il n'y a pas de (
                    echo "La requete ". $strInstruction ." doit contenir \"VALUES(....);\" !!"."\n";
                    break;
                }elseif(strPos($saisie,"VALUES(")=== 0){
                    // aucun parametre entre CREATE TABLE et (
                    echo "La requete ne comporte aucune TABLE pour l'ajout de valeurs !!"."\n";
                    break;
                }
                    
                // Le nom de la table
                $strTable=substr($saisie,0,strPos($saisie,"VALUES("));
                $saisie=substr($saisie,strlen($strTable));

                // Les parametres
                $strParametres=substr($saisie,7,-2);

                // Test saisie correct
                if(substr($strParametres,0,1)!="'" OR substr($strParametres,-1,1)!="'"){// 1er '
                    echo "Saisie des valeurs incorrectes, il faut séparer les valeurs par des \' !!"."\n";
                    break;            
                }

                $strParametres=substr($strParametres,1,-1);

                $strTable=trim($strTable);
                if (file_exists(REP_BDD.$strTable.EXTENSION_BDD)==false) {
                    echo "La table ".$strTable." n'existe pas!"."\n";
                    break;
                }

                 // Test en fonction des parametres
                    // Ouvrir le fichier
                    $fp = fopen(REP_BDD.$strTable.EXTENSION_BDD,"r");
                    // stock la premiere ligne
                    $tabEntete=explode(";",fgets($fp,4096));
                    // tableau des parametres
                    $tabParametre=explode("','",trim($strParametres));
                    fclose($fp);

                    // Test de concordance entre nb concordance et nb parametre
                    if (count($tabParametre)!=count($tabEntete)){
                        echo "Nombre de valeurs  different du nombre de parametre de la table ".$strTable."\n";
                        break;
                    }


                // Ajoute dans la table
                f_insertInto(str_replace("','",";",$strParametres),REP_BDD.$strTable.EXTENSION_BDD);
                break;

            case "CREATE TABLE ":

                if(substr($saisie,strlen($saisie)-2)!=");"){
                    echo "Une requete CREATE TABLE se termine toujours par );"."\n";
                    break;
                }
                // extrait chaine entre select et FROM
                $strInstruction = f_extraireInstruction($saisie);
                // Raccourci la saisie
                $saisie = substr($saisie,strlen($strInstruction));
    
                // Test si CREATE TABLE contient ( ou )
                if(strPos($saisie,"(")===false OR strPos($saisie,")")===false){
                    // Il n'y a pas de (
                    echo "La requete ". $strInstruction ." doit contenir \"( \" !!"."\n";
                    break;
                }elseif(strPos($saisie,"(")=== 0){
                    // aucun parametre entre CREATE TABLE et (
                    echo "La requete ne comporte aucune TABLE a créer !!"."\n";
                    break;
                }
                
                // Le nom de la table
                $strTable=substr($saisie,0,strPos($saisie,"("));
                $saisie=substr($saisie,strlen($strTable));

                // Les parametres
                $strParametres=substr($saisie,1,strpos($saisie,")")-1);
                $strParametres=str_replace(",",";",$strParametres);
                
                if (file_exists(REP_BDD.$strTable.EXTENSION_BDD)) {
                    echo "La table ". $strTable." existe déjà!"."\n";
                    break;
                }

                f_createTable(REP_BDD.$strTable.EXTENSION_BDD,$strParametres);
               
                break;

            case "DELETE FROM ":

                // extrait chaine entre DELETE FROM
                $strInstruction = f_extraireInstruction($saisie);
                // Raccourci la saisie
                $saisie = substr($saisie,strlen($strInstruction));
                
                // Test si pas de WHERE
                if(strPos($saisie," WHERE ")===false){
                    // Il n'y a pas de WHERE
                    $boolWhere=false;

                    // Le nom de la table
                    $strTable=substr($saisie,0,-1);

                }else{

                    if(strPos($saisie," WHERE ")===0){
                        echo "La requete DELETE ne comporte aucune table !!"."\n";
                       break;
                    } 
                    $boolWhere=true;

                    // Le nom de la table
                    $strTable=substr($saisie,0,strPos($saisie," WHERE "));
                    $saisie=substr($saisie,strlen($strTable)+strlen(" WHERE "));

                    // Condition WHERE
                    $strCondition=substr($saisie,0,-1);
                }

                
                // test si table existe
                if (file_exists(REP_BDD.$strTable.EXTENSION_BDD)== false){
                    echo "La table ".$strTable." n'éxiste pas !!"."\n";
                    break;
                }

                if($boolWhere){
                    // Teste la condition WHERE
                    $tabCondition[] = explode("=",$strCondition);
                    // colonne 0 le champ de la table
                    // colonne 1 le champ a modifier
                    for ($i=0; $i <count($tabCondition[0]) ; $i++){ 
                        $tabParametre[$i]=$tabCondition[0][$i];
                    }
               
                    // Ouvrir la table
                    $fp = fopen(REP_BDD.$strTable.EXTENSION_BDD,"r");
                    // stock l'entete
                    $tabEntete=explode(";",fgets($fp,4096));
                   
                    // Test de concordance entre le champs Where et les entetes tables
                    if (count($tabParametre)/2!=f_testConcordance2tab($tabEntete,$tabParametre)){
                        echo "Le champ de la table ".$strTable ." après le WHERE n'existent pas."."\n";
                        fclose($fp);
                        break;
                    }  
                    fclose($fp);
                }

                if($boolWhere){
                    // récupere le fichier et le stocke dans un tableau
                    $tabRequete=f_fichierTab(REP_BDD.$strTable.EXTENSION_BDD);

                    $intLigneRequete=count($tabRequete);

                    // Supprime uniquement les lignes concernées
                    $tabRequete=f_deleteFrom(REP_BDD.$strTable.EXTENSION_BDD ,$tabRequete,$tabCondition);
                    if (count($tabRequete)!=$intLigneRequete){
                        echo "Aucune ligne n'a été supprimée."."\n";
                    }else{
                        echo $intLigneRequete-count($tabRequete)." ligne(s) supprimée(s)."."\n";
                    }
                    

                    //f_MiseEnFormeTableau($tabRequete);
                }else{
                    // Supprime la table
                    $tabRequete=[];
                    $tabCondition=[];
                    $tabRequete=f_deleteFrom(REP_BDD.$strTable.EXTENSION_BDD,$tabRequete,$tabCondition);
                }
                
                break;

            case "DROP TABLE ":

                 // extrait chaine entre DELETE FROM
                 $strInstruction = f_extraireInstruction($saisie);
                 // Raccourci la saisie
                 $saisie = substr($saisie,strlen($strInstruction));

                if(substr($saisie,strlen($saisie)-1)!=";"){
                    echo "Une requete DROP TABLE se termine toujours par ;"."\n";
                    break;
                }
                                
                // Le nom de la table
                $strTable=substr($saisie,strlen("DROP TABLE "),-1);
                echo $strTable;
                if (file_exists(REP_BDD.$strTable.EXTENSION_BDD)) {
                    echo "La table ". $strTable." existe déjà!"."\n";
                    break;
                }

                f_dropTable(REP_BDD.$strTable.EXTENSION_BDD);
                
                break;
                case "CREATE TABLE ":

                    if(substr($saisie,strlen($saisie)-2)!=");"){
                        echo "Une requete CREATE TABLE se termine toujours par );"."\n";
                        break;
                    }
                    // extrait chaine entre select et FROM
                    $strInstruction = f_extraireInstruction($saisie);
                    // Raccourci la saisie
                    $saisie = substr($saisie,strlen($strInstruction));
        
                    // Test si CREATE TABLE contient ( ou )
                    if(strPos($saisie,"(")===false OR strPos($saisie,")")===false){
                        // Il n'y a pas de (
                        echo "La requete ". $strInstruction ." doit contenir \"( \" !!"."\n";
                        break;
                    }elseif(strPos($saisie,"(")=== 0){
                        // aucun parametre entre CREATE TABLE et (
                        echo "La requete ne comporte aucune TABLE a créer !!"."\n";
                        break;
                    }
                    
                    // Le nom de la table
                    $strTable=substr($saisie,0,strPos($saisie,"("));
                    $saisie=substr($saisie,strlen($strTable));
    
                    // Les parametres
                    $strParametres=substr($saisie,1,strpos($saisie,")")-1);
                    $strParametres=str_replace(",",";",$strParametres);
                    
                    if (file_exists(REP_BDD.$strTable.EXTENSION_BDD)) {
                        echo "La table ". $strTable." existe déjà!"."\n";
                        break;
                    }
    
                    f_createTable(REP_BDD.$strTable.EXTENSION_BDD,$strParametres);
                    
                    break;        
            default:
                echo "Instruction inconnue "."\n";
                
                break;
        }
    }
}

?> 