<?php
define("INDICATEUR_CONSOLE","SQL :>");
define("QUIT","quit");
define("EXTENSION",".dwwm");
require('../src/service/controlDeSaisie.php');
require('../src/service/modifieursDeChaine.php');

do{                                                                       //authentification
    $userAccount[0]=readline("nom utilisateur :");
    $userAccount[1]=readline("mot de passe :");
    $userAccount[0]=jAimePasLesEspaces($userAccount[0]);
    $userAccount[1]=jAimePasLesEspaces($userAccount[1]);
    $isLoged=esCeDansLaTable($userAccount,completeChemin("config.ini"));
    if($isLoged){
        echo "vous etes connecté.\n";
        $entrerUtilisateur="connexion";                           //faut l'initialiser avec une chaine obligatoirement
    }else{
        echo "erreur: mot de passe incorrecte\nvoulez vous quitter ? si oui, entrez '".QUIT."'\n";
        $entrerUtilisateur=readline(INDICATEUR_CONSOLE);
        $entrerUtilisateur=jAimePasLesEspaces($entrerUtilisateur);
    }
}while($isLoged==false&&$entrerUtilisateur!=QUIT);   //si "quit", on passe l'identification mais on rentre pas dans le corps

while($entrerUtilisateur!=QUIT){                    //le corps
    $entrerUtilisateur=readline(INDICATEUR_CONSOLE);
    $entrerUtilisateur=jAimePasLesEspaces($entrerUtilisateur);
    $typeDeCommande=ligneDeCommandeValide($entrerUtilisateur);
    if ($typeDeCommande=="createTable"){          /* switch                   *************************************************** CREATE TABLE ****************************************************** */
        $tableUtilisateur=completeChemin(entreLesDeux($entrerUtilisateur,"CREATETABLE","(").EXTENSION);
        $valsUtilisateur=convertisseurUserBdd(entreLesDeux($entrerUtilisateur,"(",")"));
        if(entreLesDeux($entrerUtilisateur,"CREATETABLE","(")==""){   /*exterioriser tout ça */
            echo "erreur : le nom de la table est vide\n";
        }else if (file_exists($tableUtilisateur)){
            echo "erreur : table déjà existante\n";
        }else if (!moinsDe25(couperSelonLeCaractère($valsUtilisateur,";"))){
            echo "erreur : overflow, longueur maximal des cases des tables = 25\n";
        }else if(!nonNul(couperSelonLeCaractère($valsUtilisateur,";"))){
            echo "erreur : entete vide\n";
        }else if (couperSelonLeCaractère($valsUtilisateur,";")!=array_unique(couperSelonLeCaractère($valsUtilisateur,";"))){
            echo "erreur : doublon dans les entetes\n";
        }else{
            $fp=fopen($tableUtilisateur,"w");
            fputs($fp,$valsUtilisateur);
            fclose($fp);
        }
    }//rajouter du }else if{ ici pour rajouter de la ligne de commande

}


?>