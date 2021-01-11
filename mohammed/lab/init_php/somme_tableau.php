<?php
$somme=0;
$tab= array ();
$nombre=readline( " entrez nombre d'operation  ");
for ($i=0; $i <$nombre ; $i++) { 
    $note=readline( " entrez les nombre  ");
    $tab=$note;
    $somme+=$note;
}
echo " la somme est de  "; echo $somme;

?>