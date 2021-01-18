<?php
    $maValeur="";
    for ($i=1; $i < 14 ; $i++) {
        if ($i<=7) {
            $maValeur=$maValeur."*";
            echo "$maValeur\n";
        }
        else if ($i>=8) {
            $maValeur=substr($maValeur,0,-1);
            echo "$maValeur\n";
        }
    }
?>