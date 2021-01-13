<?php
require('fonction.php');
$mots = readline('Ecrire un mot : ');
$lettre = readline('Ecrire la lettre a enlever : ');

    
echo purge($mots,$lettre);
?>