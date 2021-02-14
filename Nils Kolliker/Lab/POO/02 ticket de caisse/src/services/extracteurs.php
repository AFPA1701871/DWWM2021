<?php
function briseSelonLesPointsVirgules($string){
    $tableau= explode(";");
    (count($tableau)>1)?array_pop($tableau):null;
    return $tableau;
}

function lireLeFichier($string){
    $fp = fopen($string,"r");
    for ($i=0;!feof($fp);$i++){
        $tableau[$i]=fgets($fp,4096);
    }
}
?>