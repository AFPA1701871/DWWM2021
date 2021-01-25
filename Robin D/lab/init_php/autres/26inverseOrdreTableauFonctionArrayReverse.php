<?php
    $tableau1=array(1,3,5,7,9,11,13);
    $nbValeurs=count($tableau1);

    $tableau1Inverse=array_reverse($tableau1);

    for ($i=0; $i < $nbValeurs ; $i++) { 
        echo "$tableau1Inverse[$i]\n";
    }
?>