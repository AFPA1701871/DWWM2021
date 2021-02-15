<?php
require("entities\classEmployer.php");
require("entities\classCadre.php");
$salarier1=new employer ("Neymar","Jean",1850389546458,1500.56,"soudeur");
$salarier2=new employer ("Simon","Jeremy",179028955812,1700.47,"assistant mécanicien");
$salarier3=new employer ("Deray","Odile",285097154678,1900.14,"magasinière");
$cadre=new cadre ("Alain ","Deloin ",1840259453666,2100.23,"chef maintenance");
$cadre->afichage()."\n";
echo "*******************************************************************************************************\n";
echo "*******************************************************************************************************\n";
$salarier3->afichage()."\n";
echo "*******************************************************************************************************\n";
$salarier3->job_magasinier()."\n";
echo "*******************************************************************************************************\n";
echo "*******************************************************************************************************\n";
$salarier2->afichage()."\n";
echo "*******************************************************************************************************\n";
$salarier2->job_mécanicien()."\n";
echo "*******************************************************************************************************\n";
echo "*******************************************************************************************************\n";
$salarier1->afichage()."\n";
echo "*******************************************************************************************************\n";
$salarier1->job_soudeur()."\n";
echo "*******************************************************************************************************\n";
echo "*******************************************************************************************************\n";
$salaire=$salarier1->get_salaire();
echo  " votre ancien salaire mr naymar ".$salaire."\n";
$salaire=$cadre->augmentSalaire($salaire,10)."\n";
$salarier1->set_salaire($salaire);
echo  " votre nouveau salaire mr naymar ".$salarier1->get_salaire();"\n";
echo "*******************************************************************************************************\n";
echo "*******************************************************************************************************\n";
$salaire1=$salarier3->get_salaire();
echo  " votre ancien salaire mme deray :".$salaire1."\n";
$salaire1=$cadre->augmentSalaire($salaire1,20)."\n";
$salarier3->set_salaire($salaire1);
echo  " votre nouveau salaire mme deray :".$salarier3->get_salaire();"\n";

/*echo $cadre->jemange();
for ($i=1; $i <=3 ; $i++) { 
        $nom=readline( "nom :");
        $prenom=readline( "prenom :");
        $numeroSS=readline( "numero de SS:");
        $salaire=readline( "salaire :");
        $job=readline( "job :");
        ${"salarier".$i}=new employer ($nom,$prenom,$numeroSS,$salaire,$job);
        print_r(${"salarier".$i});*/



