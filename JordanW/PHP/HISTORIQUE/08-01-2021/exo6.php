<?php
echo "PREMIERE VERSION"."\n";

$tabVal=[12,10,52,1,3,7,9];

$boolTrie = true;
while ($boolTrie == true){
    $boolTrie = false;
    for ($intCompt=0; $intCompt <count($tabVal)-1 ; $intCompt++) {
        if($tabVal[$intCompt] < $tabVal[$intCompt+1]){
            $intTemp = $tabVal[$intCompt];
            $tabVal[$intCompt] =  $tabVal[$intCompt+1];
            $tabVal[$intCompt+1] = $intTemp;
            $boolTrie=true;
        }
    }
}
foreach ($tabVal as $intVal) {
    echo $intVal." ";
}

echo "\n"."DEUXIEME VERSION"."\n";

$tabVal=[12,10,52,1,3,7,9];
$boolTrie == true;
for ($i=0; $i < count($tabVal); $i++) { 
    for ($i2=0; $i2 <count($tabVal) ; $i2++) { 
        if($tabVal[$i] > $tabVal[$i2]){
            $intTemp = $tabVal[$i];
            $tabVal[$i] =  $tabVal[$i2];
            $tabVal[$i2] = $intTemp;
            $boolTrie=true;
        }
    }
}

foreach ($tabVal as $intVal) {
    echo $intVal." ";
}

echo "\n"."TROISIEME VERSION TRIE PAR FONCTION"."\n";

$tabVal=[12,10,52,1,3,7,9];
rsort($tabVal);
foreach ($tabVal as $intVal) {
    echo $intVal." ";
}
?>