<?php
function chargementClasse($class){
    require('./entities/'.$class.'.php');
}

spl_autoload_register('chargementClasse');

$compte1 = new Compte("50236R","120");
$livret1 = new Livret("45789L","1200");

echo "Création du client : \n";
$client1 = new Client("Dupont","Paul",$compte1,$livret1);
$client1->afficher();





?>