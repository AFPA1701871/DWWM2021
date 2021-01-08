<?php
$horses=readline("Saisir le nombre de chevaux partants");
$bet=readline("Saisir le nombre de chevaux joués");
$a=1;
$b=1;
for ($i=1;$i<=$horses;$i++){
    $a=$a*($i+$horses-$bet);
    $b=$b*$i;
         
}
echo "Dans l'ordre, une chance sur $a\n";
echo "Dans le désordre, une chance sur $a/$b";
?>