<?php
$line1 = readline("Entrez un nom : ");
$line2 = readline("Entrez un nom : ");
$line3 = readline("Entrez un nom : ");
echo $line1 ."\n";
echo $line2 ."\n";
echo $line3 ."\n";

if($line1 < $line2 AND $line2 < $line3){
    echo "Ces noms sont classés";
}else{
    echo "Ces coms ne sont pas classés";
}
?>