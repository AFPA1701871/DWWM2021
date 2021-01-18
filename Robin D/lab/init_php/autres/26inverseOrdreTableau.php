<?php
    $tableau1=array(1,3,5,7,9,11,13);
    $nbValeurs=count($tableau1);

    for ($i=0; $i < $nbValeurs/2 ; $i++) { 
        $temp=$tableau1[$i];
        $tableau1[$i]=$tableau1[$nbValeurs-1-$i];
        $tableau1[$nbValeurs-1-$i]=$temp;
    }

    for ($i=0; $i < $nbValeurs ; $i++) { 
        echo "$tableau1[$i]\n";
    }
?>