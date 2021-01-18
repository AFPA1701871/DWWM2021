<?php

function creationFile($commandeTab){
    //$commandeTab = explode(" ", $commande);
    //echo $commandeTab;
    $strTitreColonne = substr($commandeTab,strpos($commandeTab,"(")+1,strpos($commandeTab,")")-strpos($commandeTab,"(")-1);
    echo $strTitreColonne;
    $strTitreColonne = str_replace(",",";",$strTitreColonne);
    //echo $strTitreColonne;
    $strTab = substr($commandeTab,0,strpos($commandeTab,"("));
    //echo $strTab;
    $creation =file_put_contents("../BDD/".$strTab.".dwwm", $strTitreColonne);  
    return $creation;
}

?>
