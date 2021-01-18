<?php
function esCeDansLaTable($tableau,$fichier){
    $cEstDedans=false;
    $fp = fopen($fichier, "r"); //on saute la ligne 1
    $ligne = fgets($fp,4096);  //permet de lire la ligne complete
    while (!feof($fp)){
        $ligne = fgets($fp,4096);
        $ligneTab=couperSelonLesPointsVirgules($ligne);
        if ($tableau==$ligneTab){
            $cEstDedans=true;
        }
    }
    fclose($fp);
    return $cEstDedans;
}
?>