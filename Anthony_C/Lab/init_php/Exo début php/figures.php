<?php
    $figure1="";
    for ($j=0; $j < 7; $j++) { 
        $figure1=$figure1."*";
        echo $figure1 . "\n";
    }
    for ($i=6; $i >0 ; $i--) { 
        $figure2=substr($figure1,0,$i);
        echo $figure2 . "\n";
    }
?>