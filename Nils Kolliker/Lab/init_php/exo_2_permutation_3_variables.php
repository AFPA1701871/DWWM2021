<?php
$a=readline("premier terme : ");
$b=readline("deuxieme terme : ");
$c=readline("troisieme terme : ");
echo $a." ".$b." ".$c."\n";
$temp=$a;
$a=$c;
$c=$b;
$b=$temp;
echo $a." ".$b." ".$c;
?>