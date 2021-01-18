<?php
do{
    $nombre=readline("besoin d'un nombre: ");
}while ($nombre<=0 or $nombre!=strval(intval($nombre)));
$resultat=1;
for ($i=1;$i<$nombre+1;$i++){
    $resultat=$i*$resultat;
}
echo $resultat;
?>