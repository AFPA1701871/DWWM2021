<?php

$tabnotes = [
    "Franck" => "14",
    "Kesary" => "16",
    "Jimmy" => "15",
];

$tabnotes["Houssam"]=15;
var_dump($tabnotes);

unset($tabnotes[Franck]);
var_dump($tabnotes);
ksort($tabnotes);

echo "Le tableau après tri par ordre alphabétique est : \n";
print_r($tabnotes)."\n";

echo "Le tableau après tri par ordre de mérite est : \n";
arsort($tabnotes);
foreach ($tabnotes as $key => $value) {
	echo "$key $value \n";
}

echo "La note maximale est : ".max($tabnotes)." et la note minimale est : ".min($tabnotes)."\n";
echo "La moyenne de la classe : ".round(array_sum($tabnotes)/count($tabnotes),2);

?>