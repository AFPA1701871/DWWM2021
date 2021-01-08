<?php
    $sommeDesNotes=0;
    for ($i=1; $i < 10 ; $i++) { 
        do {
            $note=readline("entrez une note: ");
        } while ($note<0);
        $sommeDesNotes=$sommeDesNotes+$note;
    }
    
    $moyenneDesNotes=$sommeDesNotes/9;

    echo "la moyenne des notes est: ".$moyenneDesNotes;
?>