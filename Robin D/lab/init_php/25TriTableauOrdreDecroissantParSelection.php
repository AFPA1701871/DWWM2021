<?php
    $tableau1=array(47,8,28,103,12,42,5);
    $nbValeurs=count($tableau1);

    for ($i=0; $i < $nbValeurs-1 ; $i++) { 
        $positionDuPetit=$i;
        for ($j=$i+1; $j < $nbValeurs; $j++) {
            if ($tableau1[$j]>$tableau1[$positionDuPetit]) {
                $positionDuPetit=$j;
            }
        }
            $temp=$tableau1[$positionDuPetit];
            $tableau1[$positionDuPetit]=$tableau1[$i];
            $tableau1[$i]=$temp;
    }

    for ($i=0; $i < $nbValeurs ; $i++) { 
        echo "$tableau1[$i]\n";
    }
?>