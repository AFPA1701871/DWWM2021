<?php
    function loadClass($class){
        require("./entities/".$class.".class.php");
    }
    spl_autoload_register("loadClass");

    $employe1=new Employe("Jean","Neymar",1850389546458,1500.56,"soudeur");
    $employe2=new Employe("Simon","Jeremy",179028955812,1700.47,"mécanicien");
    $employe3=new Employe("Odile","Deray",285097154678,1900.14,"magasinière");

    for ($i=1;$i<=3;$i++){
        ${"employe".$i}->presentation();
    }

    $cadre1=new Cadre("Alain","Deloin",1840259453666,2100.23,"chef maintenance");
    $cadre1->set_employeToManage($manage=[$employe1,$employe2]);
    $cadre1->presentation();
    $cadre1->augmentation();
?>