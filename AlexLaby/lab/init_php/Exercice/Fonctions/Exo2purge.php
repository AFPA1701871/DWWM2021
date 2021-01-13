<?php
require('LibrairieFoncExo.php');

$inputUser=readline("Ecrivez une phrase ");
$inputPurge=readline("Ecrivez votre caractère à purger ");

echo "La phrase purgé : " .foncpurge($inputUser,$inputPurge);

?>
