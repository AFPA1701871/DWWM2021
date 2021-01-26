
<?php
function createTable($file,$saisie){
$file = 'C:\repo local\DWWM2021\mohammed\lab\init_php\.vscode\projet_SGBD\src\service\cava.txt';
// Une nouvelle personne à ajouter
$saisie= "nom ; telephone , email \n";
// Ecrit le contenu dans le fichier, en utilisant le drapeau
// FILE_APPEND pour rajouter à la suite du fichier et
// LOCK_EX pour empêcher quiconque d'autre d'écrire dans le fichier
// en même temps
file_put_contents($file, $saisie, FILE_APPEND | LOCK_EX);}


?>

