<?php
    for ($i=1; $i < 9 ; $i++) {
        $maValeur="";
        for ($j=1; $j < $i+1 ; $j++) { 
            if ($j==1 or $j==$i) {
                $maValeur=$maValeur."X";
            }
            else if ($i!=8) {
                $maValeur=$maValeur."O";
            }
            else {
                $maValeur=$maValeur."X";
            }
        }
        echo "$maValeur\n";
    }
?>