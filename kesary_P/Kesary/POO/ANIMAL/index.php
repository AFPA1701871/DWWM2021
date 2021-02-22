<?php
require("Animal.php");
require("Poisson.php");

$saumon = new Poisson("rouge", 3, "Atlantique");
$saumon -> nager();
$saumon -> manger();
$saumon -> seDeplacer();
$saumon -> crier();

?>