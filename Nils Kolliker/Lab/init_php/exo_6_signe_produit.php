<?php
$nombreATester1=readline("besoin d'un premier nombre: ");
$nombreATester2=readline("besoin d'un second nombre: ");
if ($nombreATester1==0 || $nombreATester2==0 ){ //on a pas encore les boucles donc pour l'instant, on doit faire confiance à l'utilisateur
    $resultat="produit nul";
}else{
    if($nombreATester1>0 xor $nombreATester2>0){
        $resultat="produit negatif";
    }else{
        $resultat="produit positif";
    }
}
echo $resultat;
?>