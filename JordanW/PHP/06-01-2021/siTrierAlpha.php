<?php

do{
    $strSaisie1 = readline("Nom 1:");
    $strSaisie1=ltrim($strSaisie1);
}while(is_string($strSaisie1)==true && empty($strSaisie1)==true);
do{
    $strSaisie2 = readline("Nom 2:");
    $strSaisie2=ltrim($strSaisie2);
}while(is_string($strSaisie1)==true &&  empty($strSaisie2)==true);
do{
    $strSaisie3 = readline("Nom 3:");
    $strSaisie3=ltrim($strSaisie3);
}while(is_string($strSaisie1)==true &&  empty($strSaisie3)==true);

if ($strSaisie1 < $strSaisie2 && $strSaisie2 < $strSaisie3){
    echo "trié". "\n";
}else{
    echo "non trié" . "\n";
}

?>