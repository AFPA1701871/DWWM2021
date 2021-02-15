<?php
function chargerClasse($classe){
    require $classe.'.php';
}
spl_autoload_register('chargerClasse');

$employe1= new Employe ("Neymar", "Jean", 1850389546458, 1500.56, "soudeur");
$employe2= new Employe ("Jeremy", "Simon", 179028955812, 1700.47, "assistant mécanicien");
$employe3= new Employe ("Deray", "Odile", 285097154678, 1900.14, "magasinière");

echo $employe1->effectueSonJob($employe1);
echo "\n";
echo $employe2->effectueSonJob($employe2);
echo "\n";
echo $employe3->effectueSonJob($employe3);
echo "\n";

$cadre= new Cadre ("Deloin","Alain",1840259453666,2100.33,"chef maintenance");
echo "\n";
echo $cadre->effectueSonJob();
echo "\n";
echo $cadre->manage($employe1,$employe3);
echo "\n";
echo $cadre->augmenteUnSalarie($employe1, $employe3);
/*$cadre->set_listeEmploye($listeEmployeTab=[]);
echo $listeEmploye=implode(",",$listeEmployeTab);*/


?>