<?php
    // permet l'autoload des classes
    function chargementClasse($classe) {
        require("Entities/".$classe.".class.php");
    }
    spl_autoload_register("chargementClasse");

    $employe1= new Employe("Neymar","Jean","1850389546458",1500.56,"soudeur");
    $employe2= new Employe("Jeremy","Simon","179028955812",1700.47,"mécanicien");
    $employe3= new Employe("Deray","Odile","285097154678",1900.14,"magasinière");

    $employe1->toString();
    $employe2->toString();
    $employe3->toString();

    $employe1->effectueSonJob();
    $employe2->effectueSonJob();
    $employe3->effectueSonJob();
    

    $cadre1= new Cadre("Deloin","Alain","1840259453666",2100.23,"chef maintenance");
    $cadre1->toString();

    $tabEmployeCadre1=array($employe1,$employe3);

    $cadre1->set_listeEmploye($tabEmployeCadre1);

    $cadre1->manage();

    $cadre1->augmenteUnSalarie($employe1,10);
    $cadre1->augmenteUnSalarie($employe3,20);

    $employe1->toString();
    $employe2->toString();
    $employe3->toString();

    $cadre1->toString();

?>