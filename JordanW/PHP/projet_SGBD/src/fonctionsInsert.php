<?php

function f_decoupageInsert(string &$saisie, string &$table, string &$parametres){
    // Le nom de la table
    $table=trim(substr($saisie,0,striPos($saisie,"VALUES(")));
    $saisie=substr($saisie,strlen($table));

    // Les parametres
    $parametres=substr($saisie,8,-2);
}

function f_insertInto(string $param,string $table){
     // Ouvre un fichier pour lire un contenu existant
    $table=REP_BDD.trim($table).EXTENSION_BDD;
    $contenu= file_get_contents($table);
    // Ajoute la ligne d'entete
    $contenu .= "\n".$param;
    // Écrit le résultat dans le fichier
    file_put_contents($table, $contenu);

    echo "Les valeurs ont été enregistrées dans la table ".pathinfo($table, PATHINFO_FILENAME)."\n";
}

?>