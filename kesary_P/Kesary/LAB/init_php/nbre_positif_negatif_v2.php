<?php
$line = readline("Entrez un nombre :");
//echo $line;
if($line == 0){
    echo "Zéro n'est pas un nombre positif ou négatif";
}elseif($line > 0){
    echo "C'est un nombre positif";
}else {
    "C'est un nombre négatif";
}
?>