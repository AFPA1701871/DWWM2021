<?php
$a = 5;
$b = 12; 
$c = 20;
$tmp = $c;
$c = $b;
$b = $a;
$a = $tmp;
echo "La variable a vaut maintenant :". $a . "\n";
echo "La variable b vaut maintenant :". $b . "\n";
echo "La variable c vaut maintenant :". $c ;
?>