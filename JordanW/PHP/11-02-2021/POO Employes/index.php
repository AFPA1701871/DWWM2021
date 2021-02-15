<?php 

    function chargementClass($classe){
	require('./class/'. $classe .'.class.php');
}
	spl_autoload_register('chargementClass');

    $employe1=new Employe("Jean","Neymar",1850389546458,1500.56 ,"soudeur");
    $employe2=new Employe("Simon","Jeremy",179028955812,1700.47,"assistant mécanicien");
    $employe3=new Employe("Odile","Deray",285097154678,1900.14, "magasinière");

    $cadre = new Cadre("Alain","Deloin",1840259453666,2100.23,"chef maintenance");
    $cadre->manage(array($employe1,$employe3));
    $cadre->toString();
    $cadre->augmenteUnSalarie($employe1,10);
    $cadre->augmenteUnSalarie($employe3,20);
    

?>