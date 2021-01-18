<?php
//On ouvre le fichier moncompteur.txt
$fichier = fopen("moncompteur.txt","r+");

//On lit le nombre indiqué dans ce fichier dans la variable
$visiteurs = fgets($fichier,255);

//On ajoute 1 ou nombre de visiteurs
$visiteurs++;

//On se position au début du fichier
fseek($fichier,0);

//On écrit le nouveau nombre dans le fichier
fputs($fichier,$visiteurs);

//On referme le fichier moncompteur.txt
fclose($fichier);

//on indique le nbre de visiteurs
echo $visiteurs;
?>