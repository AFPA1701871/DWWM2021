<?php
function chaineDeBonneLongueur(string $string,int $int){
    $long=iconv_strlen($string);
    if ($long<=$int){
        for ($j=0;$j<$int-$long;$j++){
            $string.=" ";
        }
        return $string;
    }
    return substr($string,0,$int-3)."...";
}

//function affichageProduitEnStock


?>