<?php
function chargementClass($class){
    require('./entities/'.$class.'.php');
}
spl_autoload_register('chargementClass');

//Création d'objet
$lapin = new Lapin("blanc",4);
$chasseur = new Chasseur("Paul","fusil");

echo "Le lapin ". $lapin->get_couleur() . " à ". $lapin->get_nombrePattes() . " pattes a été créer .\n";
echo "Le chasseur ". $chasseur->get_nom(). " à été créer avec un ". $chasseur->get_arme(). "\n";
$lapin->seNourrir();
$chasseur->seDeplacer();

do{
    $lapin->crier();
    $chasseur->chasser($lapin);
}while($lapin->_enVie)

?>