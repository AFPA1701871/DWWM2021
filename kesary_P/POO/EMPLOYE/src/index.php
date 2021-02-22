<?php
require("./entities/Employe.php");
require("./entities/Cadre.php");

echo "-------------------------------------------------------------------------\n";
echo "                              Gestion des employés                        \n";
echo "-------------------------------------------------------------------------\n";

$employe1 = new Employe("Jean","Neymar",1850389546458,1500.56,"Soudeur");
$employe2 = new Employe("Simon","Jeremy",179028955812,1700.47,"Assistant mécanicien");
$employe3 = new Employe("Odile","Deray",285097154678,1900.14,"Magasinière");
$cadre = new Cadre("Alain","Deloin",1840259453666,2100.23,"Chef maintenance");




echo "\n";
$employe1->toString();
$employe1->effectueSonJob();
echo "-----------------------------------------------------------\n";
echo "\n";
$employe2->toString();
$employe2->effectueSonJob();
echo "-----------------------------------------------------------\n";
echo "\n";
$employe3->toString();
$employe3->effectueSonJob();
echo "\n";
echo "-----------------------------------------------------------\n";
echo "\n";
$cadre->manager(array($employe1,$employe3));
echo "Liste des augmentations de cette année : \n";
echo "\n";
$cadre->augmenteUnsalarie($employe1,10);
$cadre->augmenteUnsalarie($employe3,20);
echo "\n";
echo "Voici l'état de tous les salariés de l'entreprise :\n";
echo "\n";
$employe1->toString();
echo "-----------------------------------------------------------\n";
echo "\n";
$employe2->toString();
echo "-----------------------------------------------------------\n";
echo "\n";
$employe3->toString();
echo "-----------------------------------------------------------\n";
echo "\n";
$cadre->toString();

?>