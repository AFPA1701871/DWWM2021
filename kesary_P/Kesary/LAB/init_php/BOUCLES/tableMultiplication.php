<?php
$saisie = readline("Entrez un nombre :");
echo"\n";
echo"La table est : ";
echo"\n";

for ($i=1; $i <= 10; $i++) { 
    //echo "\n".$saisie*$i;
    echo $i." * ".$saisie . " = ". $saisie*$i ."\n";
}
?>