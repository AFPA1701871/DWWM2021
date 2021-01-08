<?php
    echo "Première figure :" . "\n";

    $figure1="";
    for ($j=0; $j < 7; $j++) { /* Boucle $i pour bouclé sur la valeur $figure1.*/
        $figure1=$figure1."*"; /* Ajoute un "*" a chaque tour de boucle.*/
        echo $figure1 . "\n";
    }
    for ($i=6; $i >0 ; $i--) { /* Boucle $i pour bouclé sur la valeur $figure2.*/
        $figure1Bis=substr($figure1,0,$i); /* Retire un "*" a $figure1 chaque tour de bouche au $i ème caractère.*/
        echo $figure1Bis . "\n";
    }

    echo "Deuxième figure :" . "\n";  /* En cours de construction) */

    $figure2="";
    $count=3;
    for ($i=0; $i <8; $i++) {
        $figure2Len=strlen($figure2);
        if ($figure2Len<=1) {
            $figure2=$figure2."X";
            echo $figure2 ."\n";
        }
        elseif ($figure2Len<=6) {
            $figure2Bis=substr($figure2,0,$figure2Len-1);
            $figure2Bis=$figure2Bis."O"."X";
            $figure2=$figure2Bis;
            echo $figure2Bis."\n";      
        }
        elseif ($figure2len=7) {
            echo "XXXXXXXX";
        }
    }
?>