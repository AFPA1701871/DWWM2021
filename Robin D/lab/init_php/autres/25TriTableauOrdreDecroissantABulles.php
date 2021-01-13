<?php
    $tableau1=array(47,8,28,103,12,42,5);
    $nbValeurs=count($tableau1);

    $boolean="vrai";
    while ($boolean=="vrai") {
        $boolean="faux";
        for ($i=0; $i < $nbValeurs-1; $i++) { 
            if ($tableau1[$i] < $tableau1[$i+1]) {
                $temp=$tableau1[$i];
                $tableau1[$i]=$tableau1[$i+1];
                $tableau1[$i+1]=$temp;
                $boolean="vrai";
            }
        }
    }

    for ($i=0; $i < $nbValeurs ; $i++) { 
        echo "$tableau1[$i]\n";
    }
?>