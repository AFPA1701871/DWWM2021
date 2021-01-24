<?php
require('./Entities/function.php');
function chargerClasse($classe){
    require ('./Entities/'.$classe.'.class.php');
}
spl_autoload_register('chargerClasse');

$radar=new Radar(readline("Veuillez fixer une limitation de vitesse : "));

?>