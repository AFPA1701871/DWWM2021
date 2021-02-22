<?php 
$richter=readline (" entrez mangitude ");
switch ($richter) { // switch bien utile dans ce cas
    case 1:
        echo "non ressenti";
        break;
        case 2:
            echo "non ressenti mais detecte";
            break;
            case 3:
                echo "causant rarement des dommage";
                break;
                case 4:
                    echo "secousse notable d 'objet a la maison";
                    break;
                    case 5:
                        echo "leger dommage aux eddifice bien construit";
                        break;
                        case 6:
                            echo "destructeur dans des zones allant jusqu'a 180 km";
                            break;
                            case 7:
                                echo "dommage moderes a severes dans des zones plus vastes";
                                break;
                                case 8:
                                    echo "dommage serieux dans des zones jusqu'a des centaines de km a la ronde";
                                    break;
                                    case 9:
                                        echo "devastateur devaste des zones a des millier de km a la ronde";
                                        break;
                                
    
    default:
        echo " erreur de saisie";
        break;
}

?>