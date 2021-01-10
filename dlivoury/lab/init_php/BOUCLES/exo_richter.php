<?php
    $echelle=readline("indiquez la puissancez du tremblement: ");

    if ($echelle<1){
        echo"erreur de saise,hors echelle";
    }
        else if ($echelle>=1){
            switch($echelle){
                case 1:
                    echo"micro tremblement";
                break;
                case 2:
                    echo"tremblement très mineur";
                break;
                case 3:
                    echo"tremblement mineur";
                break;
                case 4:
                    echo"tremblement leger";
                break;
                case 5:
                    echo"tremblement modere";
                break;
                case 6:
                    echo"tremmblement fort";
                break;
                case 7:
                    echo"tremblement majeur";
                break;
                case 8:
                    echo"tremblement important";
                break;
                case 9:
                    echo"tremblement devastateur";
                break;
                default:
                    echo"apocalypse";
            }
        }
?>