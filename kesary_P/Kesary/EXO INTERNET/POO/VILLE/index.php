<?php
require("Ville.php");
/*
$ville1 = new Ville();
$ville1 -> nom = "Nantes";
$ville1 -> departement = "Loire Atlantique";
$ville2 = new Ville();
$ville2 -> nom = "Dunkerque";
$ville2 -> departement = "Nord";
echo $ville1 -> affichage();
echo $ville2 -> affichage();*/

$ville1 = new Ville ("Nantes", "Loire Atlantique");
echo $ville1 -> affichage();
$ville2 = new Ville ("Bordeaux", "Gironde");
echo $ville2 -> affichage();
?>