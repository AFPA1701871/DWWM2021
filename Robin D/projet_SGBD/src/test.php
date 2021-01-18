<?php
    $coucou="coucou";
    $taille=strlen($coucou);
    echo "$taille\n";

    $line1="";
    $line2="";
    for ($i=0; $i < strlen($coucou)+4 ; $i++) { 
        if ( $i==0 or $i==strlen($coucou)+3) {
            $line1.="+";
            $line2.="|";
        }
        if ($i==1 or $i==strlen($coucou)+2) {
            $line2.=" ";
        }
        if ($i==3) {
            $line2.=$coucou;
        }
        if ($i>=1 and $i<=strlen($coucou)+2) {
            $line1.="-";
        }
    }

    echo "$line1\n";
    echo "$line2\n";
    echo "$line1\n";
?>