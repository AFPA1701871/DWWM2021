<?php
    echo "Première figure :";

    $figure1="";
    for ($j=0; $j < 7; $j++) { 
        $figure1=$figure1."*"; /* Un "for" pour ajouter "*" chaque boucle.*/
        echo $figure1 . "\n";
    }
    for ($i=6; $i >0 ; $i--) { 
        $figure2=substr($figure1,0,$i); /* Pareil que le premier "for" sauf qu'on retire le caractère positionner a l'emplacement "$i" de "$figure2".*/
        echo $figure2 . "\n";
    }

    //echo "Deuxième figure :";  /* En cours de construction) */
?>