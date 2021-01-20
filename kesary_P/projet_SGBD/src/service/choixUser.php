<?php
//require("test4.php");
require("creationFichier.php");
require("insertionDonnees.php");
//Permet de traiter le commnade en fonction de l'option utilisateur.

function choix($commande){
    $commandeTab = explode(" ", $commande);
    //var_dump($commandeTab) ;
    //substr($commandeTab[2],0,strpos($commandeTab[2],"("));
    switch($commande){
        case $commandeTab[0] == "CREATE" && $commandeTab[1] == "TABLE" && substr($commande, -1,1) == ";":
           creationFile($commandeTab[2]);
            break;
        case "insert":
            //insertion($commandeTab[2]);
            break;
        case "quit":
            break;
        default:
            echo "Saisie erronée, veuillez recommencer : \n ";
            
    }

}


?>