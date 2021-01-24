<?php
require("fonctions.php");

echo "Write a word\n"; 
$word=readline(""); 
echo "number of vowels " . numVowels($word); 

?>