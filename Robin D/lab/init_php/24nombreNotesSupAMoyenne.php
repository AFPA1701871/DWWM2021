<?php
    do {
        $nbNotes=readline("entrez le nombre de notes: ");
    } while ($nbNotes < 1);

    $sommeNotesClasse=0;

    for ($i=0; $i < $nbNotes; $i++) { 
        $numNote=$i+1;
        do {
            $notes[$i]=readline("entrez la note N°$numNote: ");
        } while ($notes[$i] < 1);
        echo "la note n° $numNote est: $notes[$i]\n";
        $sommeNotesClasse=$sommeNotesClasse+$notes[$i];
        echo "la somme des notes de la classe est: $sommeNotesClasse\n";
    }

    $moyenneClasse=$sommeNotesClasse/$nbNotes;
    echo "la moyenne de la classe est $moyenneClasse\n";

    $nbNotesSupsAMoyenne=0;
    $notesSupsAMoyenne=[];

    for ($i=0; $i < $nbNotes ; $i++) { 
        if ($notes[$i]>$moyenneClasse) {
            $nbNotesSupsAMoyenne=$nbNotesSupsAMoyenne+1;
            array_push ($notesSupsAMoyenne, $notes[$i]);
        }
    }

    echo "le nombre de notes supérieures à la moyenne est: $nbNotesSupsAMoyenne\n";
    
    echo "les notes supérieures à la moyenne sont:\n";
    foreach ($notes as $note => $valeur) {
        if ($valeur>$moyenneClasse) {
            echo " $valeur\n";
        }
    }
?>