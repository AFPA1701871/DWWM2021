<?php
$compteur = 0;
$max = 0;
$position = 0;
$saisie = readline("Entrez un nombre :");
$compteur++;
while ($saisie != 0) {
    $saisie = readline("Entrez un nombre :");
    $compteur++;
    for ($i=1; $i < $compteur ; $i++) { 
        if ($saisie > $max) {
            $max = $saisie;
            $position = $compteur;
        }
    }
}
echo "La valeur la plus élevée est " .$max. "\n";
echo "Sa position est : " .$position;
?>

