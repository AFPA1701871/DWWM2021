
<?php 
require("./entities/class.php");
$voiture1 = new voiture();
$voiture1 -> changecouleur("rouge\n");
$voiture1 ->changemarque("mercedess\n");
$voiture1 ->changemodele("classe E\n");
$voiture1 ->changeimatricule("12-py-13\n");
$voiture2 = new voiture();
$voiture2 -> changecouleur("vert\n");
$voiture2 ->changemarque("nissan\n");
$voiture2 ->changemodele("primera\n");
$voiture2 ->changeimatricule("15-aby-19\n");

?>