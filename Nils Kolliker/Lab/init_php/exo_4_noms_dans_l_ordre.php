<?php
$nom1=readline("premier nom : ");
$nom2=readline("deuxieme nom : ");
$nom3=readline("troisieme nom : ");
if ($nom1<=$nom2 && $nom2<=$nom3){
    $resultat="dans l'ordre";
}else{
    $resultat="pas dans l'ordre";
}
echo $resultat;
?>