<?php
require ("fonctions.php");

$word=readline("Write a word\n");
$char=readline("Select character to remove\n");

echo functionPurge($word, $char);
?>