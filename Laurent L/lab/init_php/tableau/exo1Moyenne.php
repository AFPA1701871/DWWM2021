<?php
    $notes = [];
    $somme = 0;
    $nbNotes = 9;

    for ($i=0 ; $i < $nbNotes ; $i++){
        $note = readline("Saisir la note : ");
        while($note<0 or $note>20){
            $note = readline("Saisir la note : ");  
        }
        $notes[$i] = $note;
        $somme = $somme + $note;
    }

    $moyenne = $somme/$nbNotes;

    echo "La moyenne des notes est ".$moyenne."/20.";
        
?>