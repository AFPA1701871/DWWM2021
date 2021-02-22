<?php
function chargerClasse($classe){
    require "./entities/". $classe . ".class.php";
}
function chargerInterface($interface){
    require "./interface/". $interface . ".interface.php";
}
spl_autoload_register("chargerClasse");
spl_autoload_register("chargerInterface");


?>