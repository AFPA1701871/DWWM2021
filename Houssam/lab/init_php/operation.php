<?php
    echo "Écrivez 2 nombres" ."\n";
    $num1 =readline("Nombre 1 : ") ."\n";
    $num2 =readline("Nombre 2 : ") ."\n";
    echo "\n";
    echo "Écrivez un opérateur (+ - * /) pour faire votre calcul" ."\n";
    $operateur =readline("Votre opérateur : ");

    switch ($operateur) {
        case "+":
            echo $num1 + $num2;
            break;  
            case "-":
                echo $num1 - $num2;
                break; 
            case "*":
                echo $num1 * $num2;
                break;  
            case "/":
                echo $num1 / $num2;
                break; 
            default:
                echo "Je ne peux pas faire cette opération !";
    }
?>