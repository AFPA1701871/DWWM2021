<?php
$saisie = readline("Entrez un nombre :");
$somme =0;
for ($i=0; $i <= $saisie; $i++) { 
    $somme = $somme + $i;
}
echo"La somme est : ". $somme;
?>