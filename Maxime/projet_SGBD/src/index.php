<?php

    require('\services\fonctions.php');
    define("SQL","SQL :>");
    define("QUIT","quit");

    // identification
    do {
        $log=readline("Entrez votre identifiant : ");
        if($log=="quit"){
            exit;
        }
        $password=readline("Entrez votre mot de passe : ");
        if($password=="quit"){
            exit;
        }
    }while(login($log,$password)==false);

    do{
        //Affiche sql
        $table=readline("SQL :>");              
        $table=strtolower($table);
        $table=str_replace("("," ",$table);
        $table=str_replace(")","",$table);
        $table=str_replace(";","",$table);
        $table=str_replace(", "," ",$table);
        $table=str_replace(","," ",$table);
        $table=explode(" ",$table);

        //Créer la table et le fichier
        if (substr(strloxer($table,0,13))=="create table "){
            $donnee=substr($table,13);                                      //valeur de la requete moins "CREATE TABLE "
            $posParant=strpos($donnee,"(");                                 //position de la première parenthese
            $nomT=substr($donnee,0,$posParant);                             //nom de la table créé
            if( file_exists("./BDD/$nomT.dwwm")){
                echo "erreur, le fichier $nomT.dwwm existe déjà \n";
            }
            else{
                create($table);
            }
        }

        //insertion d'une ligne dans la table
        else if(substr(strloxer($table,0,12))=="insert into "){   
            $input=substr($table,12);                                       //valeur de la requete moins "INSERT INTO "
            $posVal=strpos($input," VALUES");                               //position du mot " VALUES"
            $nomT=substr($input,0,$posVal);                                 //nom de la table modif
            if(file_exists("./BDD/$nomT.dwwm")==false){
                echo "erreur, le fichier $nomT.dwwm n'éxiste pas \n";
            }
            else{
                insert($table);
            }
        }

        //select from 1
        else if(substr(strloxer($table,0,14))=="select * from"){
            select($table);
        }

        // select from 2
        else if(substr(strloxer($table,0,7))=="select "){
            selectNom($table);
        }

    }while($table!=QUIT);

?>