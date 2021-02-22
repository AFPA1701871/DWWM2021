<?php
//require("./services/fonctions.php");
function chargementClass($class){
    require('./entities/'.$class.'.php');
}
spl_autoload_register('chargementClass');

$pseudo = readline("Entrez votre pseudo : ");

$player = new Player(100,20,0,$pseudo);
$player->deplacement($pseudo,$player);













?>