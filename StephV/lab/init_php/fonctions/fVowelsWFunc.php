<?php
$word=readline("Write a word\n");
echo "Number of vowels ?\n";
echo(count_Vowels($word));

function count_Vowels($string)
{
    preg_match_all('/[aeiouy]/', $string, $word); //f perform expression match
    return count($word[0]);
}

?>