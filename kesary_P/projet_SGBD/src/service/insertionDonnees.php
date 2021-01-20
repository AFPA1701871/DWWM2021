<?php

function insertion($commande){

    //Vérification
    if (file_exists("../BDD/".$commande[2].".dwwm")) {
        echo"Ce fichier existe déjà.";
        return;
    }

    //$commandeTab = explode(" ", $commande);
    //$fp = fopen("personne.dwwm","a+");


}

?>