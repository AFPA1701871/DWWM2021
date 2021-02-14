<?php 

    function chargementClass($classe){
	require('./class/'. $classe .'.class.php');
}
	spl_autoload_register('chargementClass');

    $lapin = new Lapin("blanc",4);
    $chasseur = new Chasseur("Paul","fusil");

    $lapin->seNourrir();

    $chasseur->seDeplacer();
    do{
        $lapin->crier();
        $chasseur->chasser($lapin);
    }while($lapin->_enVie);


?>