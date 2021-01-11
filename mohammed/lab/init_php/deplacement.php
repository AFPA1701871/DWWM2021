<?php
$deplacement=readline (" entrez votre numero de deplacement ");
switch ($deplacement) {  // utilisation switch
    case 8:
        echo "deplacement en haut";
        break;
        case 2:
            echo "deplacement en bas ";
            break;
            case 4:
                echo "deplacement a gauche";
                break;
                case 6:
                    echo "deplacement a droite ";
                    break;
        default:
            echo " erreur de saisie";
        }            