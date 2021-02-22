<?php
$somme=0;
$tab= array ();
$posi=0;
$nega=0;
$nombre=readline( " entrez nombre d'operation  ");
for ($i=0; $i <$nombre ; $i++) { 
    $note=readline( " entrez les nombre  ");
    $tab=$note;
    if ($note>0) {
        $posi=$posi+1;
    }
    else {
        $nega=$nega+1;
    }
}
echo $posi."  nombre positif et  " .$nega . "  negative";

?>