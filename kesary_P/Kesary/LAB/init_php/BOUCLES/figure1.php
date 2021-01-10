<?php
$rows = readline("Entrez le  nombre de rangée :");

for ($i=0; $i < $rows ; $i++) { 
    for ($j=0; $j <= $i; $j++) { 
        echo "*";
    }
    echo "\n";
}

?>