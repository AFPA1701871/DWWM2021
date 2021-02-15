<?php
    require ("./service/fonctions.php");
    spl_autoload_register('chargerClasse');


    $lapin = new Lapin("blanc",4);
    $chasseur = new Chasseur("Paul","Bazooka");

    do{
        $lapin->seNourir();
        $chasseur->seDeplacer();
        $lapin->crier();    
        $chasseur->chasser($lapin);
    }while($lapin->get_enVie() == true)
    



?>