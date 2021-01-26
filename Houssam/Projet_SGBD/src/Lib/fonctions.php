<?php

//Vérification

    //Ici je lis le fichier config.ini pour récupérer les logins
    function lireFichier($fichier){
        $fp =fopen(\BDD\config.ini.php,"r");
            return lireFichier($fichier);
    }

    //Ici je comparre les identifiants avec les logins de la BDD
    function verifieLogin($login,$password){
    }

?>