<?php
$nb1=readline("saisir nombre 1");
$nb2=readline("saisir nombre 2");
$ops=readline("sélectionner opérateur");

switch($nb){
    case 1 : 
        $nb==$nb1+$nb2;
        echo $nb;
        break;
    case 2 :
        echo "$nb==$nb1-$nb2";
        break;
    case 3 :
        echo "$nb==$nb1*$nb2";
        break;
    case 4 :
        echo "$nb==$nb1/$nb2";
        break;            
}
?>