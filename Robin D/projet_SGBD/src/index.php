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

        $requeteMinuscule=strtolower($requeteSQL);

        if (substr($requeteSQL,strlen($requeteSQL)-1)==";") {
            
            // cas où la requête est une création de table
            if (substr($requeteMinuscule,0,13)=="create table ") {
                $donneesTable=substr($requeteSQL,13); // donne la valeur de la requete moins "CREATE TABLE "
                $posParanthese=strpos($donneesTable,"("); // donne la position de la première parenthese
                $nomTable=substr($donneesTable,0,$posParanthese); // donne le nom de la table à créer
                if ( file_exists("./BDD/$nomTable.dwwm") ) {
                    echo "erreur, le fichier $nomTable.dwwm existe déjà \n";
                }
                else {
                    createTable($requeteSQL);
                }

            }
            // cas où la requête est une insertion en fin de table
            elseif (substr($requeteMinuscule,0,12)=="insert into ") {    
                
                $contenuRequete=substr($requeteSQL,12); // donne la valeur de la requete moins "INSERT INTO "
                $posValues=strpos($contenuRequete," VALUES"); // donne la position du mot " VALUES"
                $nomTable=substr($contenuRequete,0,$posValues); // donne le nom de la table à modifier
                if ( file_exists("./BDD/$nomTable.dwwm")==false ) {
                    echo "erreur, le fichier $nomTable.dwwm n'éxiste pas \n";
                }
                else {
                    insertInto($requeteSQL);
                }
                
            }
            // cas où la requête est un affichage de toutes les données de la table
            elseif (substr($requeteMinuscule,0,14)=="select * from ") {
                
                $contenuRequete=substr($requeteSQL,14); // donne la valeur de la requete moins "SELECT * FROM "
                $posPointVirgule=strpos($contenuRequete,";"); // donne la position du mot ";"
                $nomTable=substr($contenuRequete,0,$posPointVirgule); // donne le nom de la table à modifier
                
                if ( file_exists("./BDD/$nomTable.dwwm")==false ) {
                    echo "erreur, le fichier $nomTable.dwwm n'éxiste pas \n";
                }
                else {
                    selectAll($requeteSQL);
                }
                
            }
            // cas où la requête est un affichage d'un champ des données de la table
            elseif (substr($requeteMinuscule,0,7)=="select ") {

                $contenuRequete=substr($requeteSQL,7); // donne la valeur de la requete moins "SELECT "
                $posFrom=strpos($contenuRequete," FROM"); // donne la position du mot " FROM"
                $nomsChamps=substr($contenuRequete,0,$posFrom); // donne une chaine contenant les noms des champs que l'on veut afficher
                $nomTable=substr($contenuRequete,$posFrom+6); // donne le nom de la table depuis laquelle on veut afficher des champs
                $nomTable=str_replace(";", "", $nomTable); // retire le ";" à la fin du nom de la table depuis laquelle on veut afficher des champs

                if ( file_exists("./BDD/$nomTable.dwwm")==false ) {
                    echo "erreur, le fichier $nomTable.dwwm n'éxiste pas \n";
                }
                else {
                    selectNomsChamps($requeteSQL);
                }

            }
            // cas où la requête est une sortie du programme
            elseif ($requeteMinuscule=="quit;") {
                echo "fermeture du SGBD";
            }
            // cas où la requête est incorrecte
            else {
                echo "requête incorrecte\n";
            }
        }
        else {
            echo "la requête doit se terminer par un point-virgule !\n";
        }

        
    } while ($requeteMinuscule!="quit;");
?>