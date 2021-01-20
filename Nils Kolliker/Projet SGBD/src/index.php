<?php
define("INDICATEUR_CONSOLE","SQL :>");
define("QUIT","quit");
define("EXTENSION",".dwwm");
require('../src/service/controlDeSaisie.php');
require('../src/service/modifieursDeChaine.php');
require('../src/service/affichage.php');
do{                                                                       //authentification
    $userAccount[0]=readline("nom utilisateur :");
    $userAccount[1]=readline("mot de passe :");
    $isLoged=esCeDansLaTable($userAccount,completeChemin("config.ini"));
    if($isLoged){
        echo "vous etes connecté.\n";
        $entrerUtilisateur="connexion";                           //faut l'initialiser avec une chaine obligatoirement
    }else{
        echo "erreur: mot de passe incorrecte\nvoulez vous quitter ? si oui, entrez '".QUIT."'\n";
        $entrerUtilisateur=readline(INDICATEUR_CONSOLE);
    }
}while($isLoged==false&&strtolower($entrerUtilisateur)!=QUIT);   //si "quit", on passe l'identification mais on rentre pas dans le corps

while(strtolower($entrerUtilisateur)!=QUIT){                    //le corps
    $entrerUtilisateur=readline(INDICATEUR_CONSOLE);
    $typeDeCommande=ligneDeCommandeValide($entrerUtilisateur);
    switch ($typeDeCommande){
        case "help" :             /*************************************************** HELP*************************************************************** */
            echo "CREATE TABLE nomTable(titreColonne1,titreColonne2,titreColonne3);\nINSERT INTO nomTable VALUES('valeur1','valeur2');\nSELECT * FROM nomTable;\nSELECT nom_du_champ1,nom_du_champ2 FROM nomTable;\nSELECT * FROM nomTable ORDER BY nom_du_champ ASC;\nSELECT * FROM nomTable ORDER BY nom_du_champ DESC;\nquit\n";
        break;
        case "createTable" :      /*************************************************** CREATE TABLE ****************************************************** */
            $nomDuFichier=entreLesDeux($entrerUtilisateur,"CREATE TABLE ","(");//récupération des infos (nom de table et nom des entetes)
            $tableUtilisateur=completeChemin($nomDuFichier.EXTENSION);
            $valsUtilisateur=convertisseurUserBdd(entreLesDeux($entrerUtilisateur,"(",")"));
            if(!tableVide($nomDuFichier)&&whiteListUltime($nomDuFichier)&&fichierDoitExister($tableUtilisateur,false)&&moinsDe25(couperSelonLeCaractère($valsUtilisateur,";"))&&nonNul(couperSelonLeCaractère($valsUtilisateur,";"))&&whiteListUltime($valsUtilisateur)&&sansDoublon($valsUtilisateur)){//control de saisie
                $fp=fopen($tableUtilisateur,"w");//création
                fputs($fp,$valsUtilisateur);
                fclose($fp);
            }
        break;
        case "insertInto" :       /*************************************************** INSERT INTO ******************************************************* */
            $nomDuFichier=entreLesDeux($entrerUtilisateur,"INSERT INTO "," VALUES(");//récupération des infos (nom de table)
            $tableUtilisateur=completeChemin($nomDuFichier.EXTENSION);
            if (presenceDesChevrons(entreLesDeux($entrerUtilisateur," VALUES(",")"))){//control de saisie
                $valsUtilisateur=convertisseurUserBdd(str_replace("'","",entreLesDeux($entrerUtilisateur," VALUES(",")")));//récupération des infos (les valeurs)
                if(fichierDoitExister($tableUtilisateur,true)&&moinsDe25(couperSelonLeCaractère($valsUtilisateur,";"))&&nonNul(couperSelonLeCaractère($valsUtilisateur,";"))&&whiteList($valsUtilisateur)){//controle de saisie
                    $fp = fopen($tableUtilisateur, "r");
                    $champ = fgets($fp,4096); //récupération des infos (les champs)
                    fclose($fp);
                    if (memeNombreDePointVirgule($champ,$valsUtilisateur)){//control de saisie
                        $fp=fopen($tableUtilisateur,"a");//insertion
                        fputs($fp,"\r\n".$valsUtilisateur);
                        fclose($fp);
                    }
                }
            }
        break;
        case "selectFrom" :       /************************************************** SELECTFROM ********************************************************* */
            $nomDuFichier=entreLesDeux($entrerUtilisateur,"SELECT * FROM ",";");//récupération des infos nom de table
            $tableUtilisateur=completeChemin($nomDuFichier.EXTENSION);
            if (fichierDoitExister($tableUtilisateur,true)){//control de saisie
                $fp = fopen($tableUtilisateur, "r");
                for($i=0;!feof($fp);$i++){//récupération des infos (toute la table)
                    $ligne=fgets($fp,4096);
                        $tableTab[$i]=couperSelonLeCaractère($ligne,";");
                }
                fclose($fp);
                $tableTab=egaliseurDeTaille($tableTab);
                joliTableau($tableTab);//affichage
                unset($tableTab);//netoyage
            }
        break;
        case "select" :
            $nomDuFichier=entreLesDeux($entrerUtilisateur," FROM ",";");//récupération des infos (nom de table et noms d'entete)
            $tableUtilisateur=completeChemin($nomDuFichier.EXTENSION);
            $valsUtilisateur=convertisseurUserBdd(entreLesDeux($entrerUtilisateur,"SELECT "," FROM "));
            $tabNomDesChamps=couperSelonLeCaractère($valsUtilisateur,";");
            if (fichierDoitExister($tableUtilisateur,true)){//control de saisie
                $fp = fopen($tableUtilisateur, "r");
                for($i=0;!feof($fp);$i++){//récupération des infos (toute la table)
                    $ligne=fgets($fp,4096);
                        $tableTab[$i]=couperSelonLeCaractère($ligne,";");
                }
                fclose($fp);
                if (cEstDansLEntete($tabNomDesChamps,$tableTab)){//control de saisie
                    
                    for($j=0;$j<count($tabNomDesChamps);$j++){
                        for($i=0;$i<count($tableTab);$i++){//création d'une sous table
                            $sousTableTab[$i][$j]=$tableTab[$i][array_search($tabNomDesChamps[$j],$tableTab[0])];
                        }
                    }
                    $sousTableTab=egaliseurDeTaille($sousTableTab);
                    joliTableau($sousTableTab);//affichage
                    unset($sousTableTab);//netoyage
                }
                unset($tableTab);//netoyage
            }
            unset($tabNomDesChamps);//netoyage
        break;
        case "orderBy" :
            $nomDuFichier=entreLesDeux($entrerUtilisateur,"SELECT * FROM "," ORDER BY ");//récupération des infos (nom de table)
            $tableUtilisateur=completeChemin($nomDuFichier.EXTENSION);
            if(strpos(strtoupper($entrerUtilisateur)," ASC;")!==false){////récupération des infos (croissant ou décroissant)
                $valsUtilisateur=entreLesDeux($entrerUtilisateur," ORDER BY "," ASC;");
                $typeDeTrie=true;
            }else{
                $valsUtilisateur=entreLesDeux($entrerUtilisateur," ORDER BY "," DESC;");
                $typeDeTrie=false;
            }
            if (fichierDoitExister($tableUtilisateur,true)){//control de saisie
                $fp = fopen($tableUtilisateur, "r");
                for($i=0;!feof($fp);$i++){//récupération des infos
                    $ligne=fgets($fp,4096);
                        $tableTab[$i]=couperSelonLeCaractère($ligne,";");
                }
                fclose($fp);
                if (cEstDansLEntete(array($valsUtilisateur),$tableTab)){//control de saisie
                    $colonneDeTrie=array_search($valsUtilisateur,$tableTab[0]);
                    for ($i=1;$i<count($tableTab);$i++){//trie par selection bete et mechant
                        for($j=$i+1;$j<count($tableTab);$j++){
                            if ($typeDeTrie){
                                if($tableTab[$i][$colonneDeTrie]>$tableTab[$j][$colonneDeTrie]){
                                    $temp=$tableTab[$i];
                                    $tableTab[$i]=$tableTab[$j];
                                    $tableTab[$j]=$temp;
                                }
                            }else{
                                if($tableTab[$i][$colonneDeTrie]<$tableTab[$j][$colonneDeTrie]){
                                    $temp=$tableTab[$i];
                                    $tableTab[$i]=$tableTab[$j];
                                    $tableTab[$j]=$temp;
                                }
                            }
                        }
                    }
                    $tableTab=egaliseurDeTaille($tableTab);
                    joliTableau($tableTab);//affichage
                }
                unset($tableTab);//netoyage
            }
        break;
    }//rajouter du case juste au dessus pour rajouter de la ligne de commande
}
echo "Au revoir";
?>