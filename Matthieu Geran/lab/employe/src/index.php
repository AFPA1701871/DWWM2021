<?php

    function chargementClasse($classe){
        require("./entities/".$classe.".class.php");
    }

    $employe1 = new Employe("Neymar","Jean","1850389546458",1500.56,"soudeur");
    $employe2 = new Employe("Jeremy","Simon","179028955812",1700.47,"mécanicien");   
    $employe3 = new Employe("Deray","Odile","285097154678",1900.14,"magasinière"); 
?>