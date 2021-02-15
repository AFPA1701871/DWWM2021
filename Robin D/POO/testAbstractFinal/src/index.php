<?php
    // permet l'autoload des classes
    function chargementClasse($classe) {
        require("./src/Entities/".$classe.".class.php");
    }
    spl_autoload_register("chargementClasse");

    $gontran= new Mage("Gontran","Masculin",15);
    $gontran->parler();
    $gontran->crier();

    $khadgar= new MageDeFeu("Khadgar","Masculin",16,18);
    $khadgar->lancerSortFeu();
?>