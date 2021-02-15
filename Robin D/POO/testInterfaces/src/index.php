<?php
    // permet l'autoload des classes
    function chargementClasse($classe) {
        require("Entities/".$classe.".class.php");
    }
    spl_autoload_register("chargementClasse");

    require("Interfaces/iMobile.php");

    $tulgar= new Mage("Tulgar","Masculin",16);
    $tulgar->seDeplace(10);

?>