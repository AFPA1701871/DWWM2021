<?php 

$array = array(
	0 => array('name'=>'Jean', 'rang'=> 2),
	1 => array('name'=>'Simon', 'rang'=> 3),
	2 => array('name'=>'Daniel', 'rang'=> 1)
);
 
// Obtient une liste de colonnes
foreach ($array as $key => $row) {
    $rang[$key]  = $row['rang'];
}
 
// Trie les données par rang croissant
// Ajoute $array en tant que dernier paramètre, pour trier par la clé commune
array_multisort($rang, SORT_ASC, $array);

print_r($array);

?>  