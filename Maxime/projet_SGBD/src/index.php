<?php

    require('./service/fonctions.php');

    // identification
    do {
        echo "veuillez vous logger \n";
        $login=readline("login : ");
        $password=readline("password : ");

        $fp =fopen("./BDD/config.ini", "r");
        $log=false;
        while (!feof($fp)) {
            $ligne = fgets($fp);
            $ligne = trim($ligne);
            
            if ($ligne=="$login;$password" and $ligne!="login;password") {
                    $log=true;
            }
        }
        fclose($fp);

        if ($log==false){
            echo "identifiants incorrects \n";
        }
    } while ($log==false);

    //création de la table
    $nomTable=readline("entrez le nom de la table : ");
    $table="create table if not exists `$nomTable`(";
    $nbCol=0;
    do{
        $nbCol=readline("combien de colonne souhaitez vous ? ");
    }while($nbCol<1);  

    for($i=0;$i=$nbCol;$i++){
        $nomCol=readline("rentrez le nom de la colonne suivante : ");
        
        do{
            echo "ERREUR : deux colonnes avec le même nom !!";
            $nomCol=readline("rentrez un nom de colonne valide : ");
        }while($nomCol[$i]=$nomCol[$i+1]);

        $table.="`$nomCol`";
    }
    $table.=")";

    

?>