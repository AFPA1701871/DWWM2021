<?php
$nb=readline("Veuillez saisir un nombre");
$sum=0;
for ($i=0; $i<=$nb; $i++){
    $sum=$sum+$i;
    echo $sum;
}
echo "La somme des entiers de 0 jusqu'à ce nombre est $sum";        
?>