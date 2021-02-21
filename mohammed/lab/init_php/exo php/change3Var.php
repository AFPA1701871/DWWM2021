<?php // changement valeur de variable on se casse pas la tete
$a=1;
$b=2;
$c=3;
$tmp1=$a;
$tmp2=$b;
$tmp3=$c;
$a=$tmp2;
$b=$tmp3;
$c=$tmp1;
echo $a.$b.$c;
?>