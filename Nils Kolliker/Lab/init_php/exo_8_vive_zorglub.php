<?php
$sex=readline("etes vous un homme ou une femme ? (indiquez H ou F)");
$age=readline("quel est votre age ?");
switch($sex){
    case "H":
        ($age>=20)?$boutDePhrase="etes":$boutDePhrase="n'etes pas";
    break;
    default :
        ($age>=18&&$age<=35)?$boutDePhrase="etes":$boutDePhrase="n'etes pas";
}
echo "Vous ".$boutDePhrase." imposable. \nEVIV BULGROZ !!!";
?>