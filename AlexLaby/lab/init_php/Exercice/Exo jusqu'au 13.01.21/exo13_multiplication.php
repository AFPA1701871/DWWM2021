<?php

    $nbUser=readline ("Ecrivez un nombre, nous allons vous donner sa table de multiplication : ");
    
    for ($multiplicateur=1; $multiplicateur<=10; $multiplicateur++) {
        $resultat=$nbUser*$multiplicateur;
        echo $nbUser . "x" . $multiplicateur . "=". $resultat . "\n";
    }

?>
