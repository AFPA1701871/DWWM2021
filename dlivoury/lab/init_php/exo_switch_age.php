<?php
    $age=readline("saisir l'age de l'enfant: ");
    if($age>6){
    
    switch ($age) {
        case 6:
        case 7:
            echo"poussin";
            break;
        case 8:
        case 9: 
            echo"pupille";
            break;
        case 10:
        case 11:
            echo"minime";
            break;
        default:
            echo"cadet";
        } 
    }
        else{
            echo"trop jeune";
        }   
 ?>