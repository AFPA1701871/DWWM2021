<?php
$nb=readline("Veuillez saisir un nombre");
$facto=1;
for ($i=1; $i<=$nb; $i++){
    $facto=$facto*$i;
    echo $facto;
}
echo "Le produit des entiers de 1 à ce nombre est $facto";
?>