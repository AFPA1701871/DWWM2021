<?php

    require('./service/Librairie_fonc.php');
    define("SQL","SQL :>");

    //Créer le fichier config
    initConfig();

    //Pour se log
    do {
        $inputLogin=readline("Entrez votre identifiant : ");
        if($inputLogin== "quit"){
            exit;
        }
        $inputPassword=readline("Entrez votre mot de passe : ");
        if($inputPassword== "quit"){
            exit;
        }
    } while (login($inputLogin,$inputPassword)==false);

    //Après s'être logger pour avoir accès aux différentes fonctions SQL
    do{
        $inputUser=readline(SQL);
        $inputUser=strtolower($inputUser);
        $inputUser = str_replace("("," ",$inputUser);
        $inputUser = str_replace(")"," ",$inputUser);
        $inputUser = str_replace(","," ",$inputUser);
        $inputUser = str_replace("'","",$inputUser);
        $inputUser = str_replace(";","",$inputUser);
        $inputUser = explode(" ",$inputUser); 

        //transformation de ma variable en tableau et en remplaçant les caractères génants par des espace pour le tableau afin de faire un switch case pour appeler mes différentes fonctions
        switch ($inputUser){
            case $inputUser[0]== "" :
                break;
            case $inputUser[0]== "create" and $inputUser[1]== "table":
                createTable($inputUser);
                break;
            case $inputUser[0]== "insert" and $inputUser[1]== "into" and $inputUser[3]== "values":
                insertInto($inputUser);
                break;
            case $inputUser[0]== "select" and $inputUser[1]== "*" and $inputUser[2]=="from" :
                selectEtoileFrom($inputUser);
                break;
            case $inputUser[0]== "select" and $inputUser[1]== "from" :
                selectFrom($inputUser);
                break;
            case $inputUser[0]=="quit";
                break;
            default:
                echo "Erreur de syntaxe.\n";
        } 
    }while ($inputUser[0]!="quit"); 


?>