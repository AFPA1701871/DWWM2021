<?php
    // permet l'autoload des classes
    function chargementClasse($classe) {
        require("Entities/".$classe.".class.php");
    }
    spl_autoload_register("chargementClasse");

    require("Interfaces/iVivant.php");

    // création du lapin
    $lapin= new Lapin("blanc",4,true);
    
    // création du chasseur
    $chasseur= new Chasseur("Paul","Fusil");

    $lapin->seNourrir();

    do {
        
        $chasseur->seDeplacer();

        $lapin->crier();

        $chasseur->chasser($lapin);

        if ($lapin->get_enVie()) {
            $lapin->fuir();
        }

    } while ($lapin->get_enVie());

?>