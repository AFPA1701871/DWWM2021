<?php

function chargementClasse($class){
    require('./entities/'.$class.'.php');
}
spl_autoload_register('chargementClasse');

$joueur = new Joueur(50);








?>