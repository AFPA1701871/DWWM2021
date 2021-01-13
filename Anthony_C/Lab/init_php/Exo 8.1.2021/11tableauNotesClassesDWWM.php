<?php
    //Création du tableau.
    $tabNotes=array("Franck" => 14,"Kesary" => 16,"Jimmy" => 15);
    print_r($tabNotes);
    echo "\n";

    //Ajouter houssam et sa notes au tableau.
    $tabNotes["Houssam"]=15;
    print_r($tabNotes);
    echo "\n";
    
    //Retirer la note de Franck. 
    $tabNotes["Franck"]="";
    print_r($tabNotes);
    echo "\n";

    //Déterminer la note maximale et la note minimale.
    $min = min($tabNotes["Kesary"],$tabNotes["Jimmy"],$tabNotes["Houssam"]);
    echo "La note la plus petite est : $min\n";
    $max = max($tabNotes["Kesary"],$tabNotes["Jimmy"],$tabNotes["Houssam"]);
    echo "La note la plus grande est : $max\n";
    echo "\n";

    //Afficher le tableau après l'avoir trié par ordre alpha.
    ksort($tabNotes);
    print_r($tabNotes);
    echo "\n";

    //Afficher le tableau après l'avoir trié par ordre de mérite.
    arsort($tabNotes);
    print_r($tabNotes);
    echo "\n";

    //Moyennes des notes.
    $moyenne = array_sum($tabNotes)/3;
    echo "La moyenne des notes est de $moyenne."

?>