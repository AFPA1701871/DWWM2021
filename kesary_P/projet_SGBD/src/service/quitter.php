<?php
//Fonction quitter
function quitter($saisie){
    if($saisie == "quit"){
        fclose($fichier);
    }
}
function quitterProg($commande){
    if($commande=="quit"){
        exit;
    }
}
?>