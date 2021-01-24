<?php
$sum=0;
for ($i=1;$i<=9;$i++){
    $marks=readline("Saisir la note");
    $sum=$sum+$marks;
}
$mean=$sum/$i;
echo "la moy est $mean;"
?>