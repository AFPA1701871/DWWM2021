<?php
//Permet de traiter le commnade en fonction de l'option utilisateur.

function choix($commande){
    $commandeTab = explode(" ", $commande);
    switch($commande){
        case "create":
            echo "La case à toto";
            break;
    }

}


?>