<?php 
    $A="coucou";

    $line1="****";
    for ($i=0; $i < strlen($A) ; $i++) { 
        $line1=$line1."*";
    }

    $line2="* ".$A." *";
    
    $line3="****";
    
    for ($i=0; $i < strlen($A) ; $i++) { 
        $line3=$line3."*";
    }

    echo ("$line1\n$line2\n$line3\n");
?>