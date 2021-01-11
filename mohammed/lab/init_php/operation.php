<?php
    $nombre1 = readline( " entrez nombre 1  ");
    $signe = readline(" entrez le signe de l'operation voulu pour + ou - ou * ou /  ");
    $nombre2 = readline( " entrez nombre 2  ");
   switch ($signe) {
         case "+":  // on utilise des string pour les signe
           echo "resultat  est " ;echo $nombre1+$nombre2;
           break;
                case "-":
                    echo "resultat  est  " ;echo $nombre1-$nombre2;
                break;
                    case "*":
                        echo "resultat  est  " ;echo $nombre1*$nombre2;
                    break;
                       case "/":
                        echo "resultat  est " ; echo $nombre1/$nombre2;
                        break;
                    default:
                    echo "erreur de saisie";
                    break;
    }
    ?>