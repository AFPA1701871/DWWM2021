<?php
//ou somme des nombres de 1 jusqu'à n
do{
    $nombre=readline("besoin d'un nombre: ");
}while ($nombre<=0 or $nombre!=strval(intval($nombre)));
$resultat=0;
for ($i=1;$i<$nombre+1;$i++){
    $resultat=$i+$resultat;
}
echo $resultat;
?>