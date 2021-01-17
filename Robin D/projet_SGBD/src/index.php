<?php
    // création du login et du password par défaut
    $fp = fopen("./BDD/config.ini", "w");
    fputs($fp, "login;password\n");
    fputs($fp, "admin;admin\n");
    fclose($fp);

    // identification de l'utilisateur
    do {
        echo "veuillez vous logger !\n";
        $login=readline("login : ");
        $password=readline("password : ");

        $fp =fopen("./BDD/config.ini", "r");
        $logOk=false;
        while (!feof($fp)) {
            $ligne = fgets($fp);
            $ligne = trim($ligne);
            
            if ($ligne=="$login;$password" and $ligne!="login;password") {
                    $logOk=true;
            }
        }
        fclose($fp);

        if ($logOk==false){
            echo "identifiants incorrects\n";
        }
    } while ($logOk==false);

    // requetes
    do {
        $requeteSQL=readline("SQL :> ");

        if (substr($requeteSQL,0,13)=="CREATE TABLE ") {
            $donneesTable=substr($requeteSQL,13); // donne la valeur de la requete moins "CREATE TABLE "
            $posParanthese=strpos($donneesTable,"("); // donne la position de la première parenthese
            $nomTable=substr($donneesTable,0,$posParanthese); // donne le nom de la table à créer
            $listeChamps=substr($donneesTable,$posParanthese); // donne le contenu(liste des champs) à inserer dans la table
            $listeChamps=strtr($listeChamps, ",", ";")."\n"; //convertit les "," qui séparent les champs en ";"
            $listeChamps=substr($listeChamps,1); // supprimer la "(" au début de $listeChamps
            $posParanthese2=strrpos($listeChamps,")"); // donne la position de la dernière parenthese
            $listeChamps=substr($listeChamps,0,$posParanthese2); // supprimer la ")" à la fin de $listeChamps

            $fp=fopen("./BDD/$nomTable.dwwm", "w"); // crée une table nommée $nomTable dans la base de données
            fputs($fp, "$listeChamps\n"); //insère la liste des champs dans la table précédemment créée
            fclose($fp); // clos la requête
        }
        elseif (substr($requeteSQL,0,12)=="INSERT INTO ") {
            $contenuRequete=substr($requeteSQL,12); // donne la valeur de la requete moins "INSERT INTO "
            $posValues=strpos($contenuRequete," VALUES"); // donne la position du mot " VALUES"
            $nomTable=substr($contenuRequete,0,$posValues); // donne le nom de la table à modifier
            $valeursAEntrer=substr($contenuRequete,$posValues+7); // donne le contenu(valeur des champs) à inserer dans la table
            $valeursAEntrer=strtr($valeursAEntrer, ",", ";")."\n"; //convertit les "," qui séparent les valeurs en ";"
            $valeursAEntrer=substr($valeursAEntrer,1); // supprimer la "(" au début de $valeursAEntrer
            $posParanthese2=strrpos($valeursAEntrer,")"); // donne la position de la dernière parenthese
            $valeursAEntrer=substr($valeursAEntrer,0,$posParanthese2); // supprimer la ")" à la fin de $valeursAEntrer

            $fp=fopen("./BDD/$nomTable.dwwm", "a"); // ouvre la table nommée $nomTable dans la base de données
            fputs($fp, "$valeursAEntrer\n"); //insère les valeurs dans la table précédemment créée
            fclose($fp); // clos la requête
        }
        elseif ($requeteSQL=="quit") {
            echo "au revoir";
        }
        else {
            echo "requête incorrecte\n";
        }
    } while ($requeteSQL!="quit");
?>