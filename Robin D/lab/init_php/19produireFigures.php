<?php
    for ($i=1; $i < 8+1 ; $i++) {

        if ($i==1) {
            $valeur="X";
            echo "$valeur\n";
        }
        elseif ($i==2 or $i==8) {
            $valeur=$valeur."X";
            echo "$valeur\n";
        }
        elseif ($i==3 or $i==4 or $i==5 or $i==6 or $i==7) {
            $valeur=$valeur."O";
            echo "$valeur\n";
        }
       
    }
?>