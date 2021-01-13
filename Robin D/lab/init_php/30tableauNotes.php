<?php
    echo "\n **** manipulation d'un tableau de notes (clé-valeur) **** \n";

    // déclaration du tableau
    $tableauNotes=array("Franck"=>14,"Kesary"=>16,"Jimmy"=>15);

    echo "le tableau des notes initial est : ";
    foreach ($tableauNotes as $cle => $valeur) {
        echo "$cle=>$valeur, ";
    }

    // ajout de la note d'Houssam
    echo "\najout de la note d'Houssam : ";
    $tableauNotes["Houssam"]=15;

    echo "le tableau des notes est : ";
    foreach ($tableauNotes as $cle => $valeur) {
        echo "$cle=>$valeur, ";
    }

    // suppresion de la note de Franck
    echo "\nsuppression de la note de Franck : ";
    array_shift($tableauNotes);

    echo "le tableau des notes est : ";
    foreach ($tableauNotes as $cle => $valeur) {
        echo "$cle=>$valeur, ";
    }

    //déterminer la note maximale et la note minimale du groupe
    echo "\nla note maximale est : ".max($tableauNotes)."\n";
    echo "la note minimale est : ".min($tableauNotes)."\n";

    //tri du tableau par ordre alphabétique
    ksort($tableauNotes);

    echo "le tableau des notes triées par ordre alphabétique est : ";
    foreach ($tableauNotes as $cle => $valeur) {
        echo "$cle=>$valeur, ";
    }
    
    //tri du tableau par ordre de mérite
    arsort($tableauNotes);

    echo "\nle tableau des notes triées par ordre de mérite est : ";
    foreach ($tableauNotes as $cle => $valeur) {
        echo "$cle=>$valeur, ";
    }

    //déterminer la moyenne de la classe
    $moyenneClasse=array_sum($tableauNotes)/count($tableauNotes);
    echo "\n";
    echo "la moyenne de la classe est $moyenneClasse";

?>

