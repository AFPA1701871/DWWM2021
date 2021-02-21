<?php

    require ("./service/fonction.php");
    spl_autoload_register('chargerClasse');

    $employe1 = new Employe("Jean","Neymar",1850389546458,1500.86,"soudeur");
    $employe2 = new Employe("Simon","Jeremy",1790289558120,1700.47,"assistant mecanicien");
    $employe3 = new Employe("Odile","Deray",285097154678,1900.14,"magasinière");

    $employe1->toString();
    $employe1->effectueSonJob();

    $employe2->toString();
    $employe2->effectueSonJob();
    
    $employe3->toString();
    $employe3->effectueSonJob();

    $cadre = new Cadre("Alain","Deloin",1840259453666,2100.23,"chef maintenance",[$employe1,$employe3]);
    $cadre->toString();
    $cadre->effectueSonJob();

    $cadre->manage();
   

    // print_r($cadre->get_listeEmploye());

    // $nom = $cadre->get_listeEmploye()[0]->get_nom();
    
    // echo "\n".$nom;

    $cadre->augmenterUnSalarie($employe1,10);
    $cadre->augmenterUnSalarie($employe3,20);

    $employe1->toString();
    $employe2->toString();
    $employe3->toString();



?>