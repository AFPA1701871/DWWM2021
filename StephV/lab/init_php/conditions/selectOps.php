<?php
$nb1=readline("saisir nombre 1");
$nb2=readline("saisir nombre 2");
$ops=readline("sélectionner opérateur");
echo $nb1. "". $ops. "". $nb2. "=" ;
switch($ops){
    case "+" : 
        echo $nb1+$nb2;
        break;
    case "-" :
        echo $nb1-$nb2;
        break;
    case "*" :
        echo $nb1*$nb2;
        break;
    case "/" :
        echo $nb1/$nb2;
        break; 
    default:
        echo "error";
        break;           
}

?>