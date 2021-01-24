<?php 

require("fonctionsSGBD.php");
    require("fonctionsCreate.php");
    require("fonctionsSelect.php");
    require("fonctionsDelete.php");
    require("fonctionsinsert.php");
    require("fonctionsUpdate.php");

define("PREFIXE","SQL :> ");
define("REP_BDD","../BDD/");
define("EXTENSION_BDD",".dwwm");
define("LONGUEUR_MAX_CHAMP",25);

do{

    $login = readline("Saisir le login : ");
    if($login=="quit"){exit();}

    $mdp = readline("Saisir le mot de passe : ");
    if($mdp=="quit"){exit();}

} while(f_testLoginMdp($login,$mdp)==false);

while(true){

    // saisie
    $saisie = readline(PREFIXE);

    // Quitte le programme
    if($saisie =="quit"){exit();}

    // Test le derniere caracteres
    if(substr($saisie,strlen($saisie)-1,1)!=";" && $saisie !="help"){
        echo "Une requete se termine toujours par ;"."\n";
    }else{
        // Selon la saisie
        $strInstruction=f_extraireInstruction($saisie);
        switch (f_extraireInstruction($saisie)) {
            case "SELECT ":

                // Raccourci la saisie
                $saisie = substr($saisie,strlen($strInstruction));

                // Test pas de FROM
                if(striPos($saisie,"FROM ")===false){
                    echo "La requete ". $strInstruction ."doit contenir \"FROM \" !!"."\n";
                    break;
                }
                // Test si rien entre SELECT et FROM
                if(striPos($saisie,"FROM ")=== 0){
                    echo "La requete ne comporte aucun parametre d'affichage !!"."\n";  
                    break;
                }

                // Decoupe la variable saisie pour obtenir les variables de la requetes
                $strParametres="";
                $strInstruction2="";
                $strTable="";
                f_decoupageRequeteSelect($saisie,$strParametres,$strInstruction2,$strTable);
                
                $saisie=$strTable;

                //////////////////////////////
                //////////////////////////////
                //////////////////////////////
                // SELECT FROM WHERE
                $boolWhere=false;
                // Test si SELECT FROM WHERE existe
                 if(striPos($saisie," WHERE ")!=false){
                     
                     $boolWhere=true;
                     // récupere la table
                    $strTable=trim(substr($saisie,0,striPos($saisie," WHERE ")));
                    $saisie=substr($saisie,strlen($strTable)+strlen(" WHERE "));
                
                    $boolTrie=false;
                    // Test si SELECT FROM WHERE Order by
                    if(striPos($saisie," Order by ")!=false){
                        // si existe tester si ASC ou DESC existe a la fin
                        if(substr(strtoupper($saisie),-3)!="ASC" && substr(strtoupper($saisie),-4)!="DESC"){
                            echo "Le Order by doit absolument être couplé avec ASC ou DESC !!"."\n";
                            break;
                        }
                        $boolTrie=true;

                        // Recuperer ChampsWhere
                        $strChampWhere=trim(substr($saisie,0,striPos($saisie," Order by ")));
                        $tabChampsWhere=explode("=",$strChampWhere);
                        $saisie=substr($saisie,strlen($strTable)+14);

                        // Recuperer le parametreTrie
                        if(substr(strtoupper($saisie),-4)==" ASC"){
                            $strParametreTrie=substr($saisie,0,-4);
                            $strTrie="ASC";
                        }elseif(substr(strtoupper($saisie),-5)==" DESC"){
                            $strParametreTrie=substr($saisie,0,-5);
                            $strTrie="DESC";
                        }

                    }else{
                        // Recuperer ChampsWhere
                        $strChampWhere=trim(substr($saisie,0));
                        $tabChampsWhere=explode("=",$strChampWhere);
                    }
                    if(f_testConcordanceWhere($strTable,$tabChampsWhere)==false){break;}

                 }else{
                    ///////////////
                    ///////////////
                    ///////////////
                    ///////////////
                    // Test si Order by existe
                     $boolTrie=false;
                     if(striPos($saisie," Order by ")!==false){
                         // si Order by existe tester si ASC ou DESC existe a la fin
                         if(stripos($saisie,"ASC")=== false && stripos($saisie,"DESC")===false){
                             echo "Le Order by doit absolument être couplé avec ASC ou DESC !!"."\n";
                             break;
                        }

                        if(strtoupper(substr($saisie,-3))!="ASC" && strtoupper(substr($saisie,-4))!="DESC"){
                            echo "Le Order by doit absolument être couplé avec ASC ou DESC !!"."\n";
                            break;
                        }
                        
                        $boolTrie=true;

                        // Decoupage du Order by
                        $strTable="";
                        $strParametreTrie="";
                        $strTrie="";
                        f_decoupageOrderBy($saisie,$strTable,$strParametreTrie,$strTrie);
                    }
                        
                }

                // test si table existe deja
                if(f_testFichierExiste($strTable,true)==false){break;}

                // Test en fonction des parametres
                if($strParametres!="*"){
                    // Test concordance entre les parametres affichages et ceux de la table
                    $strParametres=str_replace(" ","",$strParametres);
                    if (f_testConcordance($strTable,$strParametres,",")==false){break;}
                }

                // Test si parametreTrie existe
                if($boolTrie){
                    // Test concordance entre le parametre de trie et ceux de la table
                    if (f_testConcordanceTrie($strTable,$strParametreTrie)==false){break;}
                }

                // récupere la table et le stocke dans un tableau
                $tabRequete=f_fichierTab($strTable);

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

                // Test si saisie se termine par );
                if(substr($saisie,strlen($saisie)-2)!=");"){
                    echo "Une requete ".$strInstruction."se termine toujours par );"."\n";
                    break;
                }
                // Raccourci la saisie
                $saisie = substr($saisie,strlen($strInstruction));
                
                // Test si CREATE TABLE contient ( ou )
                if(striPos($saisie,"VALUES(")===false OR striPos($saisie,")")===false){
                    // Il n'y a pas de (
                    echo "La requete ". $strInstruction ."doit contenir 'VALUES(....);' !!"."\n";
                    break;
                }elseif(striPos($saisie,"VALUES(")=== 0){
                    // aucun parametre entre CREATE TABLE et (
                    echo "La requete ne comporte aucune TABLE pour l'ajout de valeurs !!"."\n";
                    break;
                }
                
                // Découpe le Insert
                $strTable="";
                $strParametres="";
                f_decoupageInsert($saisie,$strTable,$strParametres);

                // Enleve les espaces
                //$strParametres=str_replace(" ","",$strParametres);

                // Test saisie correct
                if(substr($strParametres,0,1)!="'" OR substr($strParametres,-1,1)!="'"){// 1er '
                    echo "Saisie des valeurs incorrectes, il faut séparer les valeurs par des ' !!"."\n";
                    break;            
                }

                $strParametres=substr($strParametres,1,-1);

                // Test si la table n'existe pas
                if(f_testFichierExiste($strTable,true)==false){break;}
                
                // Test la longueur des champs
                $tabParametre=explode("','",trim($strParametres));
                if(f_champsTropLong($tabParametre,LONGUEUR_MAX_CHAMP)==true){break;}

                // Test caracteres speciaux
                if(f_caractereInterditTab($tabParametre,"les parametres")==true){break;}
                
                // Test en fonction des parametres
                if(f_testConcordanceNombreChamps($strTable,$tabParametre)==false){break;}
                
                // Ajoute dans la table
                f_insertInto(str_replace("','",";",$strParametres),$strTable);
                break;

            case "CREATE TABLE ":

                // Test les deux dernieres caracteres
                if(substr($saisie,strlen($saisie)-2)!=");"){
                    echo "Une requete ".$strInstruction."se termine toujours par );"."\n";
                    break;
                }
                // Raccourci la saisie
                $saisie = substr($saisie,strlen($strInstruction));
                
                // Test les positions de parentheses
                if(f_testCreateTableParenthese($saisie)==true){break;}
                
                // Recupere la table et les parametres
                $strTable="";
                $strParametres="";
                f_decoupageCreateTable($saisie,$strTable,$strParametres);
                
                // Verifie la bonne saisie du nom de la Table
                if(f_caractereInterdit($strTable,"la table")==true){break;}

                // Test si table existe
                if(f_testFichierExiste($strTable,false)==true){break;}

                // Test la longueur des champs
                $tabPar=explode(";",$strParametres);
                if(f_champsTropLong($tabPar,LONGUEUR_MAX_CHAMP)==true){break;}

                // Test la validité d'un champs
                if(f_caractereInterditTab($tabPar,"les champs")==true){break;}
                
                // test doublon dans les titres
                if ($tabPar != array_unique($tabPar)){
                    echo "Doublons dans les titres de colonnes, création impossible !!"."\n";
                    break;
                }

                f_createTable($strTable,$strParametres);
                break;

            case "DELETE FROM ":

                // Raccourci la saisie
                $saisie = substr($saisie,strlen($strInstruction));
                
                // Test si pas de WHERE
                if(striPos($saisie," WHERE ")===false){
                    // Il n'y a pas de WHERE
                    $boolWhere=false;

                    // Le nom de la table
                    $strTable=substr($saisie,0,-1);

                }else{
                    // WHERE sans table
                    if(striPos($saisie," WHERE ")===0){
                        echo "La requete DELETE ne comporte aucune table !!"."\n";
                       break;
                    } 

                    $boolWhere=true;
                    $strTable="";
                    $strCondition="";
                    // Recupere la table et les conditions de DELETE
                    f_decoupageDelete($saisie,$strTable,$strCondition);
                }

                // test si table existe
                if(f_testFichierExiste($strTable,true)==false){break;}

                if($boolWhere){

                    $tabCondition[] = explode("=",$strCondition);
                    // [0] le champ table   [1] le champ a modifier
                    for ($i=0; $i <count($tabCondition[0]) ; $i++){ 
                        $tabParametre[$i]=$tabCondition[0][$i];
                    }
               
                    if(f_testConcordanceWhere($strTable,$tabParametre)==false){break;}
                }

                if($boolWhere){
                    // récupere le fichier et le stocke dans un tableau
                    $tabRequete=f_fichierTab($strTable);
                    $intLigneRequete=count($tabRequete);

                    // Supprime uniquement les lignes concernées
                    $tabRequete=f_deleteFrom($strTable,$tabRequete,$tabCondition);
                    if (count($tabRequete)!=$intLigneRequete){
                        echo "Aucune ligne n'a été supprimée."."\n";
                    }else{
                        echo $intLigneRequete-count($tabRequete)." ligne(s) supprimée(s)."."\n";
                    }
                    
                }else{
                    // Vide la table
                    $tabRequete=[];
                    $tabCondition=[];
                    $tabRequete=f_deleteFrom($strTable,$tabRequete,$tabCondition);
                }
                break;

            case "DROP TABLE ":

                 // extrait chaine entre DELETE FROM
                 $strInstruction = f_extraireInstruction($saisie);
                 // Raccourci la saisie
                 $saisie = substr($saisie,strlen($strInstruction));
               
                // Le nom de la table
                $strTable=substr($saisie,0,-1);
                // Test si la table exite
                if(f_testFichierExiste($strTable,true)==false){break;}

                // Supprime la table
                f_dropTable($strTable);
                break;
            
            case "UPDATE ":

                // Raccourci la saisie
                $saisie = substr($saisie,strlen($strInstruction));

                // Test position du SET
                if(f_testUpdateSet($saisie)==true){break;}
                
                // Recupere la Table (ou + si il y a un WHERE)
                $strTable="";
                f_decoupageUpdate($saisie,$strTable);

                // Requete sans WHERE
                if(striPos($saisie," WHERE ")=== false){
                    //recuperer 'champ=champ' =>  autant de fois qu'il y en a
                    $tabChamps=explode(",",$saisie);
                    $boolUpdateWhere=false;
                }else{
                    // si WHERE
                    if(striPos($saisie," WHERE ")===0){
                        echo "La requete UPDATE ne comporte aucune valeur entre SET et WHERE !!"."\n";
                        break;
                    } 
                        // Recupere les champs et les champs WHERE
                        $tabChamps=[];
                        $tabChampsWhere=[];
                        f_decoupageUpdateWhere($saisie,$tabChamps,$tabChampsWhere);

                        $boolUpdateWhere=true;
                }
                
                // test si table existe
                if(f_testFichierExiste($strTable,true)==false){break;}

                // Test les champs de la table
                foreach($tabChamps as $val){
                    // Recuperer le champTable (champTable=champ)
                    $tabChampTable[] = explode("=",$val);
                }
                
                // [0] le champ de la table [1] le champ a modifier
                for ($i=0; $i <count($tabChampTable) ; $i++) { 
                    $tabParametre[]=$tabChampTable[$i][0];
                }

                // Test si strlen(valeur)>=25
                if(f_champsTropLong($tabParametre,LONGUEUR_MAX_CHAMP)==true){break;}

                // Test en fonction des parametres
                if(f_testConcordanceTab($strTable,$tabParametre)==false){break;}

                if($boolUpdateWhere==true){
                    // Test de concordance entre le champs Where et les entetes tables
                    if(f_testConcordanceWhere($strTable,$tabChampsWhere)==false){break;}
                }

                // récupere le fichier et le stocke dans un tableau
                $tabRequete=f_fichierTab($strTable);

                if($boolUpdateWhere){
                    // Update des valeurs WHERE
                    $tabRequete=f_updateSetWhere($tabChampTable,$tabRequete,$strTable,$tabChampsWhere);
                }else{
                    // Update des valeurs WHERE
                    $tabRequete=f_updateSet($tabChampTable,$tabRequete,$strTable);
                }

                break;
            case "HELP":
                echo "  SELECT * FROM #table#"."\n";
                echo "  SELECT #nom1,nom2# FROM #table#"."\n";
                echo "  SELECT #nom1,nom2# FROM #table# ORDER BY #colonne# ASC ou DESC"."\n";
                echo "  SELECT * FROM #table# WHERE #champ#=#colonne#"."\n";
                echo "  SELECT * FROM #table# WHERE #champ#=#colonne# ORDER BY #colonne# ASC ou DESC"."\n";
                echo "  CREATE TABLE #table#(#colonne1#,#colonne2#,#colonne3#)"."\n";
                echo "  INSERT INTO #table# VALUES('#val1','#val1','#val1')"."\n";
                echo "  UPDATE #table# SET #colonne#=#val#"."\n";
                echo "  UPDATE #table# SET #colonne#=#val# WHERE #colonne#=#ancienneVal#"."\n";
                echo "  DELETE FROM #table# WHERE #colonne#=#val#"."\n";
                echo "  DROP TABLE #table#"."\n";
                break;
                default:
                echo "Instruction inconnue "."\n";
                break;
        }
    }
}

?> 