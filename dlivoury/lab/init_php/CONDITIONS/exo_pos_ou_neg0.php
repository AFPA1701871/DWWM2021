<?php
    $nombreUser=readline("entrez un chiffre ou un nombre: ");
        
        if ($nombreUser<0){
            echo $nombreUser.' '."ce nombre est negatif";
        }
        else if ($nombreUser>0) {
            echo $nombreUser.' '."ce nombre est positif";
        }
        else    
            echo $nombreUser.' '."ce nombre est nul";
        ?>   
        