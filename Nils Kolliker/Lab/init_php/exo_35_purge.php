<?php
require('fonctions_foireuses.php');
$mot=readline("tape un mot : ");
do{
    $caractere=readline("tape un caractère à retirer : ");
}while(strlen($caractere)!=1);
echo "chaine purgé : ".purge($mot,$caractere);
?>