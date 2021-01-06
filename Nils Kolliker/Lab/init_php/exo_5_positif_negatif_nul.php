<?php
$nombreATester=readline("besoin d'un nombre: ");

if ($nombreATester<0){
    $resultat="negatif";
}else if($nombreATester>0){
    $resultat="positif";
}else{
    $resultat="c'est nul !";
}   
echo $resultat;
?>