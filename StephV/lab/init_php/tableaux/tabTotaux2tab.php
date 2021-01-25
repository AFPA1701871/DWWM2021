<?php
$tableA=[4,8,7,9,1,5,4,6];
$tableB=[7,6,5,2,1,3,7,4];
$tableAB=[];

for ($i=0;$i<=7;$i++){
$tableAB[]=$tableA[$i]+$tableB[$i];
}
echo "Les sommes des 2 tableaux sont \n";
foreach ($tableAB as $element){
    echo "$element\n";
}
?>