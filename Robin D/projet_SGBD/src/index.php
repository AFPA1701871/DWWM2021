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
    
    
    // fonction permettant de créer une table dans le dossier BDD
    function createTable($nomTable) {
        $fp =fopen("./BDD/$nomTable.dwwm", "w");
        fclose($fp);
    }

    // création de table
    $nomTable=readline("entrez le nom de la table à créer : ");
    createTable($nomTable);

    //fonction permettant d'insérer des données dans une table
    function insertInto($nomTable,$contenu) {
        $fp =fopen("./BDD/$nomTable.dwwm", "a");
        fputs($fp, "$contenu\n");
        fclose($fp);
    }

    // insertion de données dans une table
    $nomTable=readline("entrez le nom de la table à modifier : ");
    $contenu=readline("entrez le contenu à ajouter à la table : ");
    insertInto($nomTable,$contenu);
?>