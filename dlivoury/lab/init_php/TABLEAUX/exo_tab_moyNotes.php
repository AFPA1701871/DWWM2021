<?php
    $tableau=[];
    $totalDesNotes=0;
    

    for($i=0;$i<9;$i++){
        $tableau[$i]=readline("saisir une note: ");
        while($tableau[$i]!=is_numeric($tableau[$i])){
            $tableau[$i]=readline("saisir une valeur valide: ");
        }
        $totalDesNotes= $totalDesNotes+$tableau[$i];
   
    }   
    $moyenne= $totalDesNotes/9;

    print_r($tableau);

    echo"moyenne des notes:".' '.$moyenne;
?>