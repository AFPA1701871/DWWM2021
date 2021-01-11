<?php
$saisie = readline("Entrez un nombre :");
//Vérification de la saisie utilisateur
while (! is_numeric($saisie)) {
    echo "Recommencez \n";
    $saisie = readline("Entrez un nombre :");
}
if ($saisie == 0)  {
    echo "Impossible, Recommencez \n";
    $saisie = readline("Entrez un nombre :");
}
echo"\n";
echo"La table est : ";
echo"\n";

for ($i=1; $i <= 10; $i++) { 
    //echo "\n".$saisie*$i;
    echo $i." * ".$saisie . " = ". $saisie*$i ."\n";
}
?>