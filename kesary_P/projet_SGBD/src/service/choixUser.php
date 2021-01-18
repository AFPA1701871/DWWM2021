<?php
//require("test4.php");
require("creationFichier.php");
//Permet de traiter le commnade en fonction de l'option utilisateur.

function choix($commande){
    $commandeTab = explode(" ", $commande);
    //var_dump($commandeTab) ;
    substr( $commandeTab[2],0,strpos("(", $commandeTab[2]));
    switch($commandeTab[0]){
        case "create":
           creationFile($commandeTab[2]);
            break;
        case "insert":
            insertion();
            break;
        case "select*":
            break;
        default :
            echo "Ne fonctionne pas";
            break;
    }

}


?>