<?php
    $tableau1=array(47,8,28,103,12,42,5);
    $nbValeurs=count($tableau1);

    rsort($tableau1);

    for ($i=0; $i < $nbValeurs ; $i++) { 
        echo "$tableau1[$i]\n";
    }
?>