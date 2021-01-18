<?php

    require('./service/fonctions.php');
    define("SQL","SQL :>");

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

?>