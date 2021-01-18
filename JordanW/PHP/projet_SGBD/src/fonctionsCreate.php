<?php

    function f_createTable(string $nomFichier,string $param){

        // Ouvre et insere l'entete
        file_put_contents($nomFichier, $param);
        echo "La table  ". pathinfo($nomFichier, PATHINFO_FILENAME). " a bien été créée "."\n";
    }

?>