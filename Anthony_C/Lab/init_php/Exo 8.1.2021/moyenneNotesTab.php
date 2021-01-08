<?php
    do{
        $notes=readline("Notez une notes :");
        $tab[] = $notes;
    } 
    while(sizeof($tab)<>9);

    // Sans fonction.
    $moyenne=0;
    $count=0;
    foreach ($tab as $key) {
        $moyenne = $moyenne+$key;
        $count= $count + 1;
    }
    $moyenne = $moyenne/$count;
    echo $moyenne . "\n";

    //Avec fonction.
    $somme =array_sum($tab);
    $moyenne2 = $somme/sizeof($tab);
    echo $moyenne2;
?>