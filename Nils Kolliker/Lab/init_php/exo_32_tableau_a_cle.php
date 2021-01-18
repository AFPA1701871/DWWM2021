<?php
$tableau = array("Franck"=>14,"Kesary"=>16,"Jimmy"=>15);
foreach ($tableau as $cle => $caseAMontrer){
    echo $cle." ".$caseAMontrer."\n";
}
echo "\n";
$tableau["Houssam"]=15;
unset($tableau["Franck"]);
foreach ($tableau as $cle => $caseAMontrer){
    echo $cle." ".$caseAMontrer."\n";
}
echo "\nla note maximale est ".max($tableau)."\nla note minimale est ".min($tableau)."\n\nla liste dans l'ordre alphabétique:\n";
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