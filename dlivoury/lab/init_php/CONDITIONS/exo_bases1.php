<?php
    $nombreUser=readline("saisir une valeur: ");
        
        if ($nombreUser<0){
            echo $nombreUser.' '."ce nombre est negatif";
        }
        else if($nombreUser>0){
            echo $nombreUser.' '."ce nombre est positif";
        }
        else {
            echo $nombreUser.' '."cette valeur est nulle";
        }
        ?>   
        