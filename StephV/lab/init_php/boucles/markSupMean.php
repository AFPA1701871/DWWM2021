<?php

$nbMarks=0;
$nbMarks=readline("Entrer le nombre de notes à saisir");
$sum=0;
$mean=0;

for ($i=1;$i<=$nbMarks;$i++){
    $marks=readline("Saisir la note");
    $sum=$sum+$marks;
    $mean=$sum/$nbMarks;
}
echo "moyenne des notes  $mean ";
$supMarks=0;
if ($marks>$mean){
    $supMarks=$supMarks+1;
}
echo " Nombre de notes supérieures à la moyenne $supMarks;"
?>