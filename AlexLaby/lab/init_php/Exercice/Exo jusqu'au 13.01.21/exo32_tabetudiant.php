<?php

    $notes= array ("Franck"=>14,"Kesary"=>16,"Jimmy"=>15);
    $notes["Houssam"]=15;

    //on va trier le tableau par ordre alphabétique pour les 4 consignes suivantes
    ksort($notes);

    echo "Le tableau avec Houssam : ";
    print_r ($notes);

    unset($notes["Franck"]);
    echo "Le tableau avec Houssam et sans Franck : ";
    print_r ($notes);

    echo "La note la plus haute : " .max($notes) ."\n";
    echo "La note minimale : " .min($notes)."\n";

    echo "Tableau classé par ordre de mérite : ";
    asort($notes);
    print_r($notes);

    $somme_notes = 0;
    $i = 0;
    foreach($notes as $cle=>$valeur){
    $i++;
    $somme_notes+=$valeur;
    }
    $moyenne = $somme_notes / $i;

    echo "La moyenne de la classe : " .$moyenne ."\n";

?>
