<?php
$nombre=readline("besoin d'un nombre: ");
$resultat=1;
for ($i=1;$i<$nombre+1;$i++){
    $resultat=$i*$resultat;
}
echo $resultat;
?>