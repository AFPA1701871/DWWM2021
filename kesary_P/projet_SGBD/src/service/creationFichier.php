<?php

function creationFile($commandeTab){
   
    //$commandeTab = explode(" ", $commande);
    //echo $commandeTab;
    $strTitreColonne = substr($commandeTab,strpos($commandeTab,"(")+1,strpos($commandeTab,")")-strpos($commandeTab,"(")-1);
    //echo $strTitreColonne;
    $strTitreColonne = str_replace(",",";",$strTitreColonne);
    //echo $strTitreColonne;
    $strTab = substr($commandeTab,0,strpos($commandeTab,"("));
    $strTitreColonneTab = explode(";",$strTitreColonne); 
 
  /*  
    //Vérification longueur nom fichier
function verifName($strTab){
    echo $strTab;
    if (strlen($strTab)>25) {
        return false;
    }else {
        return true;
    }
}

//Vérification longueur titre des colonnes
function verifTitle($strTitreColonneTab){
    foreach($strTitreColonneTab as $key){
        if (strlen($key)>25) {
            return false;
        }else {
            return true;
        }
    }
}
$verifTitre = verifTitle($strTitreColonneTab);
$verifNom = verifName($strTab);
*/
    //Vérification si le fichier existe déjà
    if(file_exists("../BDD/".$strTab.".dwwm")){
        echo "Ce fichier ". $strTab." existe déjà, veuillez recommencer.\n";
    }elseif (!$verifTitre || !$verifNom) {
        echo "Création nom de fichier imposssible, vous dépassez la longueur autorisée.\n";
    }else{
        $creation =file_put_contents("../BDD/".$strTab.".dwwm", $strTitreColonne); 
        return $creation; 
    }    
    
}

?>
