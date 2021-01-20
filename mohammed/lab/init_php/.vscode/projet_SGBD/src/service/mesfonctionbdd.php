<?php
function CreateTable($file,$champ){
$file="C:/git/mohammed/DWWM2021/mohammed/lab/init_php/.vscode/projet_SGBD/src/service/". $file .".dwwm";
$champ = str_replace(",",";",$champ);
file_put_contents($file, $champ);
return " votre table a ete cree \n";}

function InsertInto($file,$champInsert){
$file="C:/git/mohammed/DWWM2021/mohammed/lab/init_php/.vscode/projet_SGBD/src/service/". $file .".dwwm";
$ouvrir = fopen( $file, "a");
fputs($ouvrir,$champInsert);
$champInsert = str_replace(",",";",$champInsert);
return " votre champ a ete ajouter \n";
}
?>