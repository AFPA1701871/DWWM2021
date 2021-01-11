<?php

    $tabDWWM = array("Franck"=>14,"Kesary"=>16,"Jimmy"=>15);

    var_dump($tabDWWM);
    echo "\n";

    $tabDWWM["Houssam"]=15;
    var_dump($tabDWWM);
    echo "\n";

    unset($tabDWWM["Franck"]);
    var_dump($tabDWWM);
    echo "\n";

    echo "Note minimale est : ".min($tabDWWM). " ".array_search(min($tabDWWM),$tabDWWM);
    echo "\n";
    echo "Note Maximale est : ".max($tabDWWM). " ".array_search(min($tabDWWM),$tabDWWM);
    echo "\n";

    arsort($tabDWWM);
    var_dump($tabDWWM);
    echo "\n";

    echo "La moyenne de la classe est : ".array_sum($tabDWWM)/count($tabDWWM);
    echo "\n";
    foreach($tabDWWM as $eleve =>$note){
        if ($note > array_sum($tabDWWM)/count($tabDWWM)){
            echo $eleve. " a une note supérieure a la moyenne";
        }
    }
?>