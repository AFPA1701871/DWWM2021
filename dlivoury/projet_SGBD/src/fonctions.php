<?php
    require("../src/fonctionsAffichage.php");
//fonction qui permet de traiter le cas ou l'utilisateur utilise "CREATE TABLE
    function createTable($requete){
        $donneesTable=substr($requete,13); // donne la valeur de la requete 
        $posParanthese=strpos($donneesTable,"("); // donne la position de la première parenthese
        $nomTable=substr($donneesTable,0,$posParanthese); // donne le nom de la table à créer
        $valeursEntrante=substr($donneesTable,$posParanthese); // donne le contenu(liste des champs) à inserer dans la table
        $valeursEntrante=strtr($valeursEntrante, ",", ";")."\n"; //convertit les "," qui séparent les champs en ";"
        $valeursEntrante=substr($valeursEntrante,1); // supprimer la "(" au début de $valeursEntrante
        $posParanthese2=strrpos($valeursEntrante,")"); // donne la position de la dernière parenthese
        $valeursEntrante=substr($valeursEntrante,0,$posParanthese2); // supprimer la ")" à la fin de $valeursEntrante
        $valeursEntrante.=";"; // ajoute un ";" a la fin de la ligne de la table
        $valeursEntrante=str_replace("'", "", $valeursEntrante); // supprimer les "'" dans $valeursEntrante

        $fp=fopen("../bdd/$nomTable.dwwm", "w"); // crée une table nommée $nomTable dans la base de données
        fputs($fp, "$valeursEntrante\n"); //insère la liste des champs dans la table précédemment créée
        fclose($fp); // clos la requête
    }

//fonction qui va permettre d'inserer du contenu dans la table
    function insertInto($requete){
        $valeurRequete=substr($requete,12); // donne la valeur de la requete moins "INSERT INTO "
            $posValues=strpos($valeurRequete," VALUES"); // donne la position du mot " VALUES"
            $nomTable=substr($valeurRequete,0,$posValues); // donne le nom de la table à modifier
            $valeursEntrante=substr($valeurRequete,$posValues+7); // donne le contenu(valeur des champs) à inserer dans la table
            $valeursEntrante=strtr($valeursEntrante, ",", ";")."\n"; //convertit les "," qui séparent les valeurs en ";"
            $valeursEntrante=substr($valeursEntrante,1); // supprimer la "(" au début de $valeursEntrante
            $posParanthese2=strrpos($valeursEntrante,")"); // donne la position de la dernière parenthese
            $valeursEntrante=substr($valeursEntrante,0,$posParanthese2); // supprimer la ")" à la fin de $valeursEntrante
            $valeursEntrante.=";"; // ajoute un ";" a la fin de la ligne de la table
            $valeursEntrante=str_replace("'", "", $valeursEntrante); // supprimer les "'" dans $listeChamps// supprimer les "'" dans $valeursEntrante

            $fp=fopen("../bdd/$nomTable.dwwm", "a"); // ouvre la table nommée $nomTable dans la base de données
            fputs($fp, "$valeursEntrante\n"); //insère les valeurs dans la table précédemment créée
            fclose($fp); // clos la requête
    }
    // fonction affichant la table complète à partir du nom de la table $nomTable
    function selectAll($requete) {
        $contenuRequete=substr($requete,14); // donne la valeur de la requete moins "SELECT * FROM "
        $posPointVirgule=strpos($contenuRequete,";"); // donne la position du mot ";"
        $nomTable=substr($contenuRequete,0,$posPointVirgule); // donne le nom de la table à modifier
    
    $lignes=tableEnTableau2Dims($nomTable); // crée un tableau en 2 dimensions à partir de la table

    $nbDeChamps=count($lignes[0]); // donne le nombre de champs(colonnes) du tableau $lignes

    $tailleMaximaleColonne=maxColonne($lignes,$nbDeChamps); // donne un tableau de la taille maximum des colonnes pour les colonnes 0 à $nbDeChamps-1

    for ($j=0; $j < count($lignes[0]); $j++) {
        for ($i=0; $i < count($lignes); $i++) { 
            $valeurEncodees[$i][$j]=tablage($lignes[$i][$j],$tailleMaximaleColonne[$j]);
        }
    } // donne un tableau $valeurEncodees qui contient les champs et leur valeurs au format "| valeur   "

    $ligneSeparatrice="+";
    for ($i=0; $i < $nbDeChamps ; $i++) { 
        for ($k=0; $k < $tailleMaximaleColonne[$i]+4; $k++) { 
            if ($k==$tailleMaximaleColonne[$i]+3) {
                $ligneSeparatrice.="+";
            }
            if ($k>=1 and $k<=$tailleMaximaleColonne[$i]+2) {
                $ligneSeparatrice.="-";
            }
        }
    } // crée la ligne de délimitation haute et basse du tableau

    $k=-1;
    for ($i=0; $i < count($lignes); $i++){ 
        $k+=1;
        $ligneAffichage[$k]="";
        for ($j=0; $j < count($lignes[0]) ; $j++) { 
            $ligneAffichage[$k].=$valeurEncodees[$i][$j];
        }
        $ligneAffichage[$k].="|";
    } // crée un tableau contenant une chaine pour chaque ligne à afficher

    $k=-1;
    for ($i=0; $i < count($ligneAffichage)+3 ; $i++) { 
        if ($i==0 or $i==2 or $i==count($ligneAffichage)+2) {
            echo $ligneSeparatrice."\n";
        }
        else {
            $k+=1;
            echo $ligneAffichage[$k]."\n";
        }
    } // affiche l'intégralité du tableau
}


