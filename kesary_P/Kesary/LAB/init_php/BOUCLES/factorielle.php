<?php
$saisie = readline("Entrez un nombre :");
$factorielle = 1;
for ($i=1; $i <= $saisie; $i++) { 
    $factorielle = $factorielle * $i;
    echo $factorielle ."\n";
}
?>