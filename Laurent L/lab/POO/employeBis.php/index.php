<?php

    require('./service/fonction.php');
    spl_autoload_register('chargerClasse');


    $employe1 = new Employe("Neymar","Jean",1850389546458,1500.56,"soudeur");
    $employe2 = new Employe("Simon","Jeremy",1790289558120,1700.47,"assistant mécanicien");
    $employe3 = new Employe("Deray","Odile",2850971546780,1900.14,"magasiniére");


    $employe1->toString();
    $employe1->effectueSonJob();
    $employe2->toString();
    $employe2->effectueSonJob();
    $employe3->toString();
    $employe3->effectueSonJob();

    $cadre1 = new Cadre("Deloin","Alain",1840259453666,2100.23,"chef maintenace",[$employe1,$employe3]);

    $cadre1->manage();

    $cadre1->augmenteUnSalarie($employe1,10);
    $cadre1->augmenteUnSalarie($employe3,20);

    $employe1->toString();
    $employe2->toString();
    $employe3->toString();
?>