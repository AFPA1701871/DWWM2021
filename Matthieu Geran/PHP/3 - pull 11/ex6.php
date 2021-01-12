<?php

    $notes = array("Franck" => 14,"Kesary" => 16,"Jimmy" => 15); //création du tableau avec des clés comme index

    array_push($notes["Houssam"]); //ajout d'une valeur avec clé
    $notes["Houssam"] = 15;

    foreach ($notes as $cle => $valeur){
        echo $cle . " : " . $valeur . "\n";
    }

    echo "\n";

    unset($notes["Franck"]); //suppression d'une valeur en l'appelant par sa clé

    foreach ($notes as $cle => $valeur){
        echo $cle . " : " . $valeur . "\n";
    }

    echo "\nNote maximale : " . max($notes);
    echo "\nNote maximale : " . min($notes) . "\n\n";

    ksort($notes); //Tri par clé
    
    foreach ($notes as $cle => $valeur){
        echo $cle . " : " . $valeur . "\n";
    }

    echo "\n";

    asort($notes); //Tri par valeur
    
    foreach ($notes as $cle => $valeur){
        echo $cle . " : " . $valeur . "\n";
    }

    echo "\n";

    $moyenne = array_sum($notes) / count($notes);
    echo "Moyenne : " . $moyenne;
?>