<?php

function chargerClasse($classe){
    require($classe.".class.php");
}


spl_autoload_register("chargerClasse");

$mage1 = new mage("Bob",100);

$mage1->sePresenter();

$mage1->saCapacite();

$mage1->seDeplacer();



?>