<?php
$tableau = array("Franck"=>14,"Kesary"=>16,"Jimmy"=>15);
foreach ($tableau as $cle => $caseAMontrer){
    echo $cle." ".$caseAMontrer."\n";
}
echo "\n";
$tableau["houssam"]=15;
array_shift($tableau);
foreach ($tableau as $cle => $caseAMontrer){
    echo $cle." ".$caseAMontrer."\n";
}
echo "\nla note maximale est ".max($tableau)."\nla note minimale est ".min($tableau)."\nla liste dans l'ordre alphabétique:\n";
ksort($tableau);
foreach ($tableau as $cle => $caseAMontrer){
    echo $cle." ".$caseAMontrer."\n";
}
echo "\nla liste dans l'ordre de mérite:\n";
arsort($tableau);
foreach ($tableau as $cle => $caseAMontrer){
    echo $cle." ".$caseAMontrer."\n";
}
echo "\nla moyenne est de : ".array_sum($tableau)/count($tableau);
?>