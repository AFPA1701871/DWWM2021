<?php
    $tableauNotes= array(array("Franck",14),array("Kesary",16),array("Jimmy",15));

    // ajout de la note d'Houssam
    array_push($tableauNotes, array("Houssam",15));

    // suppression de la note de Franck 
    array_shift($tableauNotes);

    //affichage des notes
    print_r($tableauNotes);

    //déterminer la note maximale et la note minimale du groupe
    $noteMax="";
    
    for ($j=0; $j < count($tableauNotes); $j++) { 
        if ($tableauNotes[0][$j]>$noteMax) {
            $noteMax=$tableauNotes[0][$j];
        }
    }

    echo "la note maximale est $noteMax";

    


?>

