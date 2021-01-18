<?php
$somme=0;
$tab= array ();
for ($i=0; $i <9 ; $i++) { 
    $note=readline( " entrez note  ");
    $tab[$i]=$note;
    $somme+=$note;
}
print_r($tab);
 echo implode("-",$tab);
echo " la moyenne est de  "; 
echo ($somme/9);
for ($i=0; $i <9 ; $i++) { 
    if ($tab[$i]> ($somme/9)){
        echo $tab[$i]." ";
    }
}



?>


