<?php
function loadClass($class){
    require $class.'.php';
}
spl_autoload_register('loadClass');


$lapin= new Lapin(); 

$chasseur= new Chasseur();

$lapin->seNourrir();

do{
    $chasseur->seDeplacerAvecSonFusil($chasseur);
    $lapin->crier();
    $chasseur->chasser($lapin);
}while($lapin->getEnVie=true);



?>