<?php
require("maFonctions.php");
$phrase = readline("Entrez un phrase à rechercher : \n");
$motPurge = readline("Quelles lettres voulez-vous purger : \n"); 
echo purge($phrase,$motPurge);

?>