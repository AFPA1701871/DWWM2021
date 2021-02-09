<?php
    // permet l'autoload des classes
    function chargementClasse($classe) {
        require("./src/Entities/".$classe.".class.php");
    }
    spl_autoload_register("chargementClasse");

    $gontran=new Personnage("Gontran","masculin");
    $gontran->sePresenter();
    $gontran->crier();

    $gurdil=new Nain("Gurdil","masculin",17);
    $gurdil->sePresenter();
    $gurdil->frapper($gontran);
    $gurdil->crier();
    

?>