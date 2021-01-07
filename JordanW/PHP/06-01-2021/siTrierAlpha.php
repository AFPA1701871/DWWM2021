<?php

$intSaisie1 = readline("Nom 1:");
$intSaisie2 = readline("Nom 2:");
$intSaisie3 = readline("Nom 3:");

if ($intSaisie1 < $intSaisie2 && $intSaisie2 < $intSaisie3){
    echo "trié". "\n";
}else{
    echo "non trié" . "\n";
}

?>