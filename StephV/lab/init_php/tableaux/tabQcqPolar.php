<?php
$size=readline("Saisir le nombre de valeur du tableau ");

for ($i=0;$i<=$size;$i++){
    $tab[$i]=readline("Saisissez un nombre ");
   
    if ($tab[$i]=0){
        echo "Saisir une autre valeur";
    }
    
    if ($tab[$i]>0){
        $posi=$posi+1;
    }    
    if ($tab[$i]<0){
        $neg=$neg+1;
    }    
}
echo "Le nombre de valeurs positives est : $posi";
echo "Le nombre de valeurs négatives est : $neg";
?>