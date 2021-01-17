<?php

    $variable1 ="CREATE TABLE monTest(nom,prenom,ville,manille=Martinique)";
    $variable2 ="INSERT INTO monTest VALUES(nom,prenom,taille)";
    $variable3 ="SELECT * FROM bonTest";

    $createMasque = '/CREATE TABLE [a-z]\w((\w{0,},{0,})\w)/';
    $insertIntoMasque = '/INSERT INTO [a-z]\w VALUES(...)/';
    $selectFromMasque = '/SELECT \* FROM [a-z]\w/';

    $masqueSaisie = [$createMasque,$insertIntoMasque,$selectFromMasque];

    for($i=0;$i<count($masqueSaisie);$i++){
        if(preg_match($masqueSaisie[$i], $variable1,$matches)){
            echo "c'est ok";
            print_r ($matches);
        }else {
            echo "il y a une erreur";
            print_r ($matches);
        }

    }
        



?>