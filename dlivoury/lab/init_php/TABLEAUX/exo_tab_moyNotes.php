<?php
    $tableau=[];
    $totalDesNotes=0;

    for($i=0;$i<9;$i++){
        $tableau[$i]=readline("saisir une note: ");
        $totalDesNotes= $totalDesNotes+$tableau[$i];
    }
    $moyenne= $totalDesNotes/9;

    echo"moyenne des notes:".' '.$moyenne;
?>
