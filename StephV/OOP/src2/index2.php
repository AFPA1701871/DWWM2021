<?php
function chargementClasse($classe){
    require("./entities2/".$classe.".php");
}
spl_autoload_register("chargementClasse");

$mageNoir=new Necromancer("MageNoir");
$mageNoir->regarde();
echo "\n";
$mageNoir->invoque();
echo "\n";
$mageNoir->téléportation();


?>