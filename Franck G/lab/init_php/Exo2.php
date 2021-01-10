<?php
$a = 10;
$b = 20;
$c = 30;

[$a, $b, $c] = [$b, $c, $a];

echo $a."\n";
echo $b."\n";
echo $c;
?>