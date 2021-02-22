<?php
require('fonctions_foireuses.php');
$mot=readline("tape un mot : ");
$caracteres=readline("tape le ou les caractère(s) à retirer : ");
echo "chaine purgé : ".multiPurge($mot,$caracteres);
?>