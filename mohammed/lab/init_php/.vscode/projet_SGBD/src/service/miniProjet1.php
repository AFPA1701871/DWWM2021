<?php
require ("mesfonctionbdd.php");
$fp =fopen("C:\git\mohammed\DWWM2021\mohammed\lab\init_php\.vscode\projet_SGBD\BDD\config.ini.txt", "r");
$line=fgets($fp);
echo " veuillez saisir vos identifiant " ."\n";
$i=0;
do {
    $ok=0;
    $ok1=0;
    $login=readline (" saisir identifiant ");  $motdepasse=readline( "  saisir mot de passe ");// demande de se logger
        while (!feof($fp)) {// cette fonction permet de parcourir notre ficher 
            $line=fgets($fp,4096);// cette fonction permet de lire le ficher par ligne
            $tab[$i]=$line;// en repli un tableau avec les ligne
            $i++;}// incremente le i=0 par 1 pour stocker les ligne                                                                          
                    $admin= implode($tab);// convertir tableu en string 
                        $user = strstr($admin, ';', true );//(true) lire string avant ";"
                       if ($user==$login ) {
                              echo " login correct  "."\n";
                                $ok=1;}// condition de while
                                  $user1 = strstr($admin, ';', false );//(false) lire string apartir de ";"
                        if ($user1==";".$motdepasse ) { // concatone avec ";" pour comparer mot apres ";"
                                echo " mot de passe correct "."\n";
                                $ok1=1;}      
                        else {
                            echo " saisie incorrect "."\n";
                        }            
}   while ($ok==0 and $ok1==0 ); 
        $fp =fclose($fp);
        //***************************************************CREATE TABLE ******************************************//
        $creatable =readline ( "SQL:=>"); //saisie utilisateur
        $tablesaisie=explode(" ",$creatable);// convertir en 3 tableau en se basant sur " "
            if (strtoupper(  $tablesaisie[0])." ".strtoupper( $tablesaisie[1])=="CREATE TABLE" and (count ($tablesaisie)==3)){ // comparaison des mots constant
                     echo "saisie create ok\n";
                     $find=strlen ($creatable);//compter le nombre de caractere de la saisie
                     $posiNomtable = strpos($tablesaisie[2],"(");// determiner posistion debut (
                     $fintable2 = strpos($tablesaisie[2],";");// determiner la position dernier caractere )
                     $nomTable= substr($tablesaisie[2],0,$posiNomtable);  // determiner le nom de la table mot avant ()        
                     $nomchamp=substr($tablesaisie[2],$posiNomtable+1,-2);// determiner les champs apartir de ( jusqu'a ;
                 
                     $testmonchamp=explode(",",$tablesaisie[2]);//recupuer les mot dans un tab en se basant sur ,
                     $bol=false;
                         foreach ($testmonchamp as $key) { // tester mot < 25 caractere
                              if(strlen ( $key)>25){
                                 echo " la longueur du $key est depasser ";
                                  $bol=true;
                                  break;
                              }
                         }
                  if ($bol==false) {
                        if (file_exists("C:/git/mohammed/DWWM2021/mohammed/lab/init_php/.vscode/projet_SGBD/src/service/". $nomTable .".dwwm"))
                         { // verifier si le fichier existe deja avant de
                                echo " le ficher existe deja\n ";}
                        else{
                               
                                echo CreateTable($nomTable,$nomchamp);}      
                   }
                    } 
                else  {
                    echo "saisie incorrect "; }    
                                              
      
          //********************************************************INSERT INTO *************************************** */
      $creatable1 =readline ( "SQL:=>"); //saisie utilisateur
        $tablesaisie1=explode(" ",$creatable1);// convertir en 3 tableau en se basant sur " "
                           if (strtoupper(  $tablesaisie1[0])." ".strtoupper( $tablesaisie1[1])=="INSERT INTO"){ // comparaison des mots constant
                                  echo "saisie into ok\n";} 
        $find=strlen ($creatable);//compter le nombre de caractere de la saisie
        $posiInsert = strpos($tablesaisie1[2],"(");// determiner posistion debut (
        $finsaisie = strpos($tablesaisie1[2],";");// determiner la position dernier caractere )
        $nomInsert = substr($tablesaisie1[2],0,$posiInsert);  // determiner le nom de la table mot avant ()        
        $champInsert=substr($tablesaisie1[2],$posiInsert+1,-2);// determiner les champs apartir de ( jusqu'a ;
        $testchampInsert=explode(",",$tablesaisie1[2]);//recupuer les mot dans un tab en se basant sur ,
        $bol=false;
            foreach ($testchampInsert as $key1) { // tester mot < 25 caractere
                 if(strlen ( $key1)>25)  {
                    echo " la longeur du $key1 est depasser ";
                     $bol=true;
                     break;}
                 }
                 $ok=1;
                 if ($bol==false) {
                    if (file_exists("C:/git/mohammed/DWWM2021/mohammed/lab/init_php/.vscode/projet_SGBD/src/service/". $nomTable .".dwwm"))
                     { // verifier si le fichier existe deja avant de   
                           $ok=0; }
                    if ($ok==0) {
                        echo " le ficher n'existe pas \n ";}
                        else if($ok==1) {
                            echo InsertInto($nomInsert,$champInsert) ;
                        }
                }    
                        
   /////***********************************SELECT FROM *****************************///////////************* */ */                              
   $creatableR =readline ( "SQL:=>"); //saisie utilisateur
   $tablesaisieR=explode(" ",$creatableR);// convertir en 3 tableau en se basant sur " "
                      if (strtoupper(  $tablesaisieR[0])." ".strtoupper( $tablesaisieR[1])=="SELECT FROM"){ // comparaison des mots constant
                             echo "saisie select from ok \n";} 
   $find=strlen ($creatableR);//compter le nombre de caractere de la saisie
   $posiSelect = strpos($tablesaisieR[2],"(");// determiner posistion debut (
   $finsaisieR = strpos($tablesaisieR[2],";");// determiner la position dernier caractere )
   $nomSelect = substr($tablesaisieR[2],0,$posiSelect);  // determiner le nom de la table mot avant ()        
            $ok=1; 
               if (file_exists("C:/git/mohammed/DWWM2021/mohammed/lab/init_php/.vscode/projet_SGBD/src/service/". $nomTable .".dwwm"))
                { // verifier si le fichier existe deja avant de   
                      $ok=0; }
               if ($ok==0) {
                   echo " le ficher n'existe pas \n ";}
                   else if($ok==1) {
                       echo SelectFrom($nomSelect) ;
                   }
                                                      
      // desoler je n' ai pas eu le temps pour le do while  et les controle ):!!!!!!!!
?>