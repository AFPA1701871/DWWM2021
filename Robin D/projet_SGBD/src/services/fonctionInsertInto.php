<?php
    function insertInto($requeteSQL) {
        $contenuRequete=substr($requeteSQL,12); // donne la valeur de la requete moins "INSERT INTO "
        $posValues=strpos($contenuRequete," VALUES"); // donne la position du mot " VALUES"
        $nomTable=substr($contenuRequete,0,$posValues); // donne le nom de la table à modifier
        $valeursAEntrer=substr($contenuRequete,$posValues+7); // donne le contenu(valeur des champs) à inserer dans la table
        $valeursAEntrer=strtr($valeursAEntrer, ",", ";")."\n"; //convertit les "," qui séparent les valeurs en ";"
        $valeursAEntrer=substr($valeursAEntrer,1); // supprimer la "(" au début de $valeursAEntrer
        $posParanthese2=strrpos($valeursAEntrer,")"); // donne la position de la dernière parenthese
        $valeursAEntrer=substr($valeursAEntrer,0,$posParanthese2); // supprimer la ")" à la fin de $valeursAEntrer
        $valeursAEntrer.=";"; // ajoute un ";" a la fin de la ligne de la table
        $valeursAEntrer=str_replace("'", "", $valeursAEntrer); // supprimer les "'" dans $listeChamps// supprimer les "'" dans $valeursAEntrer

        $fp=fopen("./BDD/$nomTable.dwwm", "a"); // ouvre la table nommée $nomTable dans la base de données
        fputs($fp, "$valeursAEntrer\n"); //insère les valeurs dans la table précédemment créée
        fclose($fp); // clos la requête
    }
?>