<?php
$somme=0;
$tab= array ();
for ($i=0; $i <9 ; $i++) { 
    $note=readline( " entrez note  ");
    $tab=$note;
    $somme+=$note;
}
echo " la moyenne est de  "; echo $somme/9;

?>