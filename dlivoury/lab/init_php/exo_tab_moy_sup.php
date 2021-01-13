<?php
    $tableau=[];
    $totalDesNotes=0;
    $nbNotes=readline("saisir le nombre de notes a calculer: ");
    while($nbNotes<1 or $nbNotes!=is_numeric($nbNotes)){
        $nbNotes=readline("saisir une valeur valide: ");
    }
    

    for($i=0;$i<$nbNotes;$i++){
        $tableau[$i]=readline("saisir une note: ");
        while($tableau[$i]!=is_numeric($tableau[$i])){
            $tableau[$i]=readline("saisir une valeur valide: ");
        }
        $totalDesNotes= $totalDesNotes+$tableau[$i];
   
    }   
    $moyenne= $totalDesNotes/$nbNotes;

    for($i=0;$i<$nbNotes;$i++){
        if($tableau[$i]>$moyenne){
            $plusG=0;
            $plusG=$plusG+1;
        }
        
                else if($tableau[$i]<$moyenne){
                    $notesInf=0;
                    $notesInf=$notesInf+1;
                }
    }
    print_r($tableau);

    echo"moyenne des notes:".' '.$moyenne;
    echo"\n";
    echo"notes supérieures a la moyenne:".' '.$plusG;
    echo"\n";
    echo"notes inferieures a la moyenne:".' '.$notesInf;
    
   
?>