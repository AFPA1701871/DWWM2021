<?php

    function f_decoupageCreateTable(string $saisie,string &$table,string &$param){
        // Le nom de la table
        $table=substr($saisie,0,strPos($saisie,"("));
        $saisie=substr($saisie,strlen($table));

        // Les parametres
        $param=substr($saisie,1,strpos($saisie,")")-1);
        $param=str_replace(",",";",$param);
    }

    function f_testCreateTableParenthese(string $saisie){
        $bool=false;
        // Test si CREATE TABLE contient ( ou )
        if(strPos($saisie,"(")===false OR strPos($saisie,")")===false){
            // Il n'y a pas de (
            echo "La requete doit contenir une parenthese avant les noms de colonnes !!"."\n";
            $bool=true;
        }elseif(strPos($saisie,"(")=== 0){
            // aucun parametre entre CREATE TABLE et (
            echo "La requete ne comporte aucune TABLE a créer !!"."\n";
            $bool=true;
        }
        return $bool;
    }

    function f_createTable(string $lienTable,string $param){
        $lienTable=REP_BDD.trim($lienTable).EXTENSION_BDD;
        $nomTable=pathinfo($lienTable);
        // Ouvre et insere l'entete
        file_put_contents($lienTable, $param);
        echo "La table  ". $nomTable['basename']. " a bien été créée "."\n";
    }

?>