<?php
require("fonctionsEx3.php");
echo "\n";
echo "Racine de l'équation du 2nd degré\n";
echo "Y = aX² + bX + c \n";
echo "\n";

$nombreA = readline("Quelle est la valeur de a : ");
$nombreB = readline("Quelle est la valeur de b : ");
$nombreC = readline("Quelle est la valeur de c : ");
echo "\n";
echo calculDelta($nombreA,$nombreB,$nombreC);

?>