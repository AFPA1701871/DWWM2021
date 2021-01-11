<?php
$nombreATester=readline("besoin d'un nombre: ");//on a pas encore les boucles donc pour l'instant, on doit faire confiance à l'utilisateur

if ($nombreATester<0){
    $resultat="negatif";
}else if($nombreATester>0){
    $resultat="positif";
}else{
    $resultat="c'est nul !";
}   
echo $resultat;
?>