<?php
$nb=readline("Saisir le nombre de valeurs du tableau ");
$posi=0;
$neg=0;

for ($i=0;$i<$nb;$i++){
    $tab[$i]=readline("Saisissez un nombre ");
       
}

print_r ($tab);
if ($tab[$i]>0){
    $posi=$posi+1;
}
else {
    $neg=$neg+1;
}

    
echo "Le nombre de valeurs positives est : ".$posi."\n";
echo "Le nombre de valeurs négatives est : ".$neg;
?>