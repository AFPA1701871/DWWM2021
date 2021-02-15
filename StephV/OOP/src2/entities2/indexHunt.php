<?php
function chargerClasse($classe){
    require $classe.'.php';
}
spl_autoload_register('chargerClasse');


$lapin= new Lapin("blanc",4,true);

$chasseur= new Chasseur("fusil","Paul");

$lapin->seNourrir();
do{
$chasseur->seDeplacerAvecSonFusil("fusil","Paul");
$lapin->crier();
$chasseur->chasser($lapin);
$lapin->fuir();
}while($enVie=true);

?>