<?php 

require ("fonctionsSGBD.php");
define ("SUFFIXE","SQL :> ");

/*do {

    $login = readline(SUFFIXE . "Saisir le login : ");
    $mdp = readline(SUFFIXE . "Saisir le mot de passe : ");

} while(f_testLoginMdp($login,$mdp)==false && $login!="quit" && $mdp!="quit");

    // Test si quit => on sort !!
    echo "trouvé"."\n";
*/
do {
    $boolSaisieCorrecte=true;
    $saisie = readline(SUFFIXE);
    
    //Test si termine par ;
    if(substr($saisie,strlen($saisie)-1,1)!=";"){
        echo "Une requete se termine toujours par ;"."\n";
        $boolSaisieCorrecte=false;
    }else{

        switch (f_extraireInstruction($saisie)) {
            case "SELECT ":
                // extrait chaine entre select et FROM
                $strInstruction = f_extraireInstruction($saisie);
                // Raccourci la saisie
                $saisie = substr($saisie,strlen($strInstruction));

                // Test si FROM est OK
                if(strPos($saisie,"FROM ")===false){
                    // Il n'y a pas de FROM
                    echo "La requete ". $strInstruction ." doit contenir \"FROM \" !!"."\n";
                    $boolSaisieCorrecte=false;
                    break;
                }
                // Test si rien entre SELECT et FROM
                if(strPos($saisie,"FROM ")=== 0){
                    echo "La requete ne comporte aucun parametre d'affichage !!"."\n";
                    $boolSaisieCorrecte=false;
                    break;
                }

                $strParametres="";
                $strInstruction2="";
                $strTable="";

                // Decoupe la variable saisie pour obtenir les variables de la requetes
                f_decoupageRequeteSelect($saisie,$strParametres,$strInstruction2,$strTable);
                
                $boolTrie=false;
                // Test si Order by existe
                 if(strPos($strTable,"Order by ")!=false){
                     // si existe tester si ASC ou DESC existe a la fin
                    if(substr($strTable,-3)!="ASC" && substr($strTable,-4)!="DESC"){
                        echo "Le Order by doit absoument être couplé avec ASC ou DESC !!"."\n";
                        $boolSaisieCorrecte=false;
                        break;
                    }

                    // ORDER BY
                    $boolTrie=true;
                    $strReq=$strTable;
                    // Recuperer la table
                    $strTable=trim(substr($strReq,0,strPos($strReq," Order by ")));
                    $strReq=substr($strReq,strlen($strTable)+strlen(" Order by "));
                    // Recuperer le parametreTrie
                    if(substr($strReq,-4)==" ASC"){
                        $strParametreTrie=substr($strReq,0,-4);
                        $strTrie="ASC";
                    }elseif(substr($strReq,-5)==" DESC"){
                        $strParametreTrie=substr($strReq,0,-5);
                        $strTrie="DESC";
                    }
                }

                // test si table existe deja
                if (file_exists($strTable.".dwwm")== false) {
                    echo "La table ".$strTable." n'éxiste pas !!"."\n";
                    $boolSaisieCorrecte=false;
                    break;
                }

                // Test en fonction des parametres
                if($strParametres!="*"){
                    // tableau des parametres saisies
                    $tabParametre=explode(",",trim($strParametres));
                    // Ouvrir le fichier
                    $fp = fopen($strTable . ".dwwm","r");
                    // stock la premiere ligne
                    $tabEntete=explode(";",fgets($fp,4096));
                    
                    
                    // Test de concordance entre parametre et parametreTrie
                    if (count($tabParametre)!=f_testConcordance2tab($tabParametre,$tabEntete)){
                        echo "Un ou plusieurs paramètres n'existent pas dans la table ".$strTable."\n";
                        $boolSaisieCorrecte=false;
                        fclose($fp);
                        break;
                    }

                }

                // Test si parametreTrie existe
                if($boolTrie){
                    // Ouvrir le fichier
                    $fp = fopen($strTable . ".dwwm","r");
                    // stock la premiere ligne
                    $tabEntete=explode(";",fgets($fp,4096));
                    $tabParametreTrie[0]=$strParametreTrie;
                    
                    // Test de concordance entre nb concordance et nb parametre
                    if (count($tabParametreTrie)!=f_testConcordance2tab($tabEntete,$tabParametreTrie)){
                        echo "Le parametre de trie n'existe pas dans la table ".$strTable."\n";
                        $boolSaisieCorrecte=false;
                        fclose($fp);
                        break;
                    }
                    fclose($fp);

                }

                // récupere le fichier et le stocke dans un tableau
                $tabRequete=f_fichierTab($strTable);

                // si order by on le trie en fonction du parametre
                if($boolTrie==true){
                    $tabRequete=f_trierTable($tabRequete,$strParametreTrie,$strTrie);
                }

                // Filtre sur les entetes a afficher
                $tabSelectFrom = f_selectFrom2($strParametres,$tabRequete);
                
                // Afficher le tableau
                f_MiseEnFormeTableau($tabSelectFrom);
                break;
 
            case "INSERT INTO ":

                if(substr($saisie,strlen($saisie)-2)!=");"){
                    echo "Une requete INSERT INTO se termine toujours par );"."\n";
                    $boolSaisieCorrecte=false;
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
                    $boolSaisieCorrecte=false;
                    break;
                }elseif(strPos($saisie,"VALUES(")=== 0){
                    // aucun parametre entre CREATE TABLE et (
                    echo "La requete ne comporte aucune TABLE pour l'ajout de valeurs !!"."\n";
                    $boolSaisieCorrecte=false;
                    break;
                }
                    
                // Le nom de la table
                $strTable=substr($saisie,0,strPos($saisie,"VALUES("));
                $saisie=substr($saisie,strlen($strTable));

                // Les parametres
                $strParametres=substr($saisie,7,-2);

                // Test saisie correct
                if(substr($strParametres,0,1)!="'" OR substr($strParametres,-1,1)!="'"){// 1er '
                    echo "Saisie des valeurs incorrectes, il faut séparer les valeurs par des \' !!";
                    $boolSaisieCorrecte=false;
                    break;            
                }

                $strParametres=substr($strParametres,1,-1);

                $strTable=trim($strTable);
                if (file_exists($strTable.".dwwm")==false) {
                    echo "La table ".$strTable." n'existe pas!";
                    $boolSaisieCorrecte=false;
                    break;
                }

                 // Test en fonction des parametres
                    // Ouvrir le fichier
                    $fp = fopen($strTable . ".dwwm","r");
                    // stock la premiere ligne
                    $tabEntete=explode(";",fgets($fp,4096));
                    // tableau des parametres
                    $tabParametre=explode("','",trim($strParametres));
                    fclose($fp);

                    // Test de concordance entre nb concordance et nb parametre
                    if (count($tabParametre)!=count($tabEntete)){
                        echo "Nombre de valeurs  different du nombre de parametre de la table ".$strTable."\n";
                        $boolSaisieCorrecte=false;
                        break;
                    }


                // Ajoute dans la table
                f_insertInto(str_replace("','",";",$strParametres),$strTable);
                break;

            case "CREATE TABLE ":

                if(substr($saisie,strlen($saisie)-2)!=");"){
                    echo "Une requete CREATE TABLE se termine toujours par );"."\n";
                    $boolSaisieCorrecte=false;
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
                    $boolSaisieCorrecte=false;
                    break;
                }elseif(strPos($saisie,"(")=== 0){
                    // aucun parametre entre CREATE TABLE et (
                    echo "La requete ne comporte aucune TABLE a créer !!"."\n";
                    $boolSaisieCorrecte=false;
                    break;
                }
                
                // Le nom de la table
                $strTable=substr($saisie,0,strPos($saisie,"("));
                $saisie=substr($saisie,strlen($strTable));

                // Les parametres
                $strParametres=substr($saisie,1,strpos($saisie,")")-1);
                $strParametres=str_replace(",",";",$strParametres);
                
                if (file_exists($strTable.".dwwm")) {
                    echo "La table ". $strTable." existe déjà!";
                    $boolSaisieCorrecte=false;
                    break;
                }

                f_createTable($strTable.".dwwm",$strParametres);
               
                break;

            case "UPDATE ":

                // extrait chaine entre UPDATE et SET
                $strInstruction = f_extraireInstruction($saisie);
                // Raccourci la saisie
                $saisie = substr($saisie,strlen($strInstruction));

                // Test si SET est OK
                if(strPos($saisie,"SET ")===false){
                    // Il n'y a pas de SET
                    echo "La requete ". $strInstruction ." doit contenir \"SET \" !!"."\n";
                    $boolSaisieCorrecte=false;
                    break;
                }
                // Test si rien entre UPDATE et SET
                if(strPos($saisie,"SET ")=== 0){
                    echo "La requete ne comporte aucune table !!"."\n";
                    $boolSaisieCorrecte=false;
                    break;
                }
                // Le nom de la table
                $strTable=substr($saisie,0,strPos($saisie,"SET "));
                $saisie=substr($saisie,strlen($strTable));

                // Les parametres APRES SET 
                $saisie=substr($saisie,strlen(" SET "),-1);


                // Test si WHERE
                if(strPos($saisie," WHERE ")=== false){
                    // Pas de where
                        //recuperer 'champ=rchamp' =>  autant de fois qu'il y en a
                        $tabChamps=explode(",",$saisie);

                }else{
                    // si WHERE
                     if(strPos($saisie," WHERE ")===0){
                         echo "La requete UPDATE ne comporte aucune valeur entre SET et WHERE !!"."\n";
                        $boolSaisieCorrecte=false;
                        break;
                     } 
                        // recuperer champ=rchamp =>  autant de fois qu'il y en a
                        // recuperer apres WHERE
                } 


                $strParametres="";
                $strInstruction2="";
                $strTable="";

                // Decoupe la variable saisie pour obtenir les variables de la requetes
                f_decoupageRequeteSelect($saisie,$strParametres,$strInstruction2,$strTable);
                
                $boolTrie=false;
                // Test si Order by existe
                 if(strPos($strTable,"Order by ")!=false){
                     // si existe tester si ASC ou DESC existe a la fin
                    if(substr($strTable,-3)!="ASC" && substr($strTable,-4)!="DESC"){
                        echo "Le Order by doit absoument être couplé avec ASC ou DESC !!"."\n";
                        $boolSaisieCorrecte=false;
                        break;
                    }

                    // ORDER BY
                    $boolTrie=true;
                    $strReq=$strTable;
                    // Recuperer la table
                    $strTable=trim(substr($strReq,0,strPos($strReq," Order by ")));
                    $strReq=substr($strReq,strlen($strTable)+strlen(" Order by "));
                    // Recuperer le parametreTrie
                    if(substr($strReq,-4)==" ASC"){
                        $strParametreTrie=substr($strReq,0,-4);
                        $strTrie="ASC";
                    }elseif(substr($strReq,-5)==" DESC"){
                        $strParametreTrie=substr($strReq,0,-5);
                        $strTrie="DESC";
                    }
                }

                // test si table existe deja
                if (file_exists($strTable.".dwwm")== false) {
                    echo "La table ".$strTable." n'éxiste pas !!"."\n";
                    $boolSaisieCorrecte=false;
                    break;
                }

                // Test en fonction des parametres
                if($strParametres!="*"){
                    // tableau des parametres saisies
                    $tabParametre=explode(",",trim($strParametres));
                    // Ouvrir le fichier
                    $fp = fopen($strTable . ".dwwm","r");
                    // stock la premiere ligne
                    $tabEntete=explode(";",fgets($fp,4096));
                    
                    
                    // Test de concordance entre parametre et parametreTrie
                    if (count($tabParametre)!=f_testConcordance2tab($tabParametre,$tabEntete)){
                        echo "Un ou plusieurs paramètres n'existent pas dans la table ".$strTable."\n";
                        $boolSaisieCorrecte=false;
                        fclose($fp);
                        break;
                    }

                }

                // Test si parametreTrie existe
                if($boolTrie){
                    // Ouvrir le fichier
                    $fp = fopen($strTable . ".dwwm","r");
                    // stock la premiere ligne
                    $tabEntete=explode(";",fgets($fp,4096));
                    $tabParametreTrie[0]=$strParametreTrie;
                    
                    // Test de concordance entre nb concordance et nb parametre
                    if (count($tabParametreTrie)!=f_testConcordance2tab($tabEntete,$tabParametreTrie)){
                        echo "Le parametre de trie n'existe pas dans la table ".$strTable."\n";
                        $boolSaisieCorrecte=false;
                        fclose($fp);
                        break;
                    }
                    fclose($fp);

                }

                // récupere le fichier et le stocke dans un tableau
                $tabRequete=f_fichierTab($strTable);

                // si order by on le trie en fonction du parametre
                if($boolTrie==true){
                    $tabRequete=f_trierTable($tabRequete,$strParametreTrie,$strTrie);
                }

                // Filtre sur les entetes a afficher
                $tabSelectFrom = f_selectFrom2($strParametres,$tabRequete);
                
                // Afficher le tableau
                f_MiseEnFormeTableau($tabSelectFrom);
                break;
            default:
                echo "Instruction inconnue "."\n";
                $boolSaisieCorrecte=false;
                break;
        }
    }
}while($saisie != "quit" OR $boolSaisieCorrecte==false);

?> 