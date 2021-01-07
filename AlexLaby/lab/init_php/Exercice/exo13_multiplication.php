<?php

    $nbUser=readline ("Ecrivez un nombre, nous allons vous donner sa table de multiplication");
    
    for ($multiplicateur=0; $multiplicateur<=$nbUser; $multiplicateur++) {
        $resultat=$nbUser*$multiplicateur;
        echo $nbUser . "x" . $multiplicateur . "=". $resultat . "\n";
    }

?>
