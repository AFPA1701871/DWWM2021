<?php
//Demande d'entrer les noms
$line1 = readline("Entrez un nom : ");
$line2 = readline("Entrez un nom : ");
$line3 = readline("Entrez un nom : ");
//Vérification, si c'est un nombre, l'utilisateur doit recommencer
if (is_numeric($line1) || (is_numeric($line2)) || (is_numeric($line3))) {
    echo "recommencez \n";
    $line1 = readline("Entrez un nom : ");
    $line2 = readline("Entrez un nom : ");
    $line3 = readline("Entrez un nom : ");
}else {
    echo $line1 ."\n";
    echo $line2 ."\n";
    echo $line3 ."\n";
}

//On détermine si c'est classé ou non
if($line1 < $line2 AND $line2 < $line3){
    echo "Ces noms sont classés";
}else{
    echo "Ces coms ne sont pas classés";
}
?>