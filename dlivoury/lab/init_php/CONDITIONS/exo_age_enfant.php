<?php
    $ageEnfant=readline("veuillez indiquer l'age de l'enfant: ");

        if($ageEnfant>=12){
            echo"classe cadet";
        }
        else if ($ageEnfant>=10){
            echo"classe minime";
        }
        else if($ageEnfant>=8){
            echo"classe pupille";
        }
        else if($ageEnfant>=6){
            echo"classe poussin";
        }
        else{
            echo"trop jeune";
        } 
        ?>   