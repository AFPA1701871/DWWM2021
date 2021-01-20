<?php
    require('./src/services/fonctionCreateTable.php');
    require('./src/services/fonctionInsertInto.php');
    require('./src/services/fonctionsSelect.php');

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

    // requêtes
    do {
        $requeteSQL=readline("SQL :> ");
        // cas où la requête est une création de table
        if (substr($requeteSQL,0,13)=="CREATE TABLE ") {
            createTable($requeteSQL);
        }
        // cas où la requête est une insertion en fin de table
        elseif (substr($requeteSQL,0,12)=="INSERT INTO ") {
            insertInto($requeteSQL);
        }
        // cas où la requête est un affichage de toutes les données de la table
        elseif (substr($requeteSQL,0,14)=="SELECT * FROM ") {
            selectAll($requeteSQL);
        }
        // cas où la requête est un affichage d'un champ des données de la table
        elseif (substr($requeteSQL,0,7)=="SELECT ") {
            selectNomsChamps($requeteSQL);
        }
        // cas où la requête est une sortie du programme
        elseif ($requeteSQL=="quit") {
            echo "au revoir";
        }
        // cas où la requête est incorrecte
        else {
            echo "requête incorrecte\n";
        }
    } while ($requeteSQL!="quit");
?>