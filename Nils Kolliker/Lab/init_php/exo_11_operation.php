<?php
$nombre1=readline("quel est le 1er nombre? ");
$nombre2=readline("quel est le 2d nombre? ");
$operateur=readline("quelle est l'operateur? ");
switch($operateur){
    case "+":
        $resultat=$nombre1+$nombre2;
    break;
    case "-":
        $resultat=$nombre1-$nombre2;
    break;
    case "*":
        $resultat=$nombre1*$nombre2;
    break;
    case "/":
        $resultat=$nombre1/$nombre2;
    break;
    default :
        $resultat="je ne connais pas cet operateur :/";
    }
echo $resultat;
?>