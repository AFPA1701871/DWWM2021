<?php
  function chargementClass($class){
    require( "./entities/".$class.'.class.php');
  }
spl_autoload_register('chargementClass');
$compte1=new compte (223344556,0);
//print_r ($compte1);
$compte2=new compte (369258147,0);
$client1=new client ("9876543",array($compte1,$compte2));
print_r ($client1);
/////////////////////////////////////////////////////////
$compte12=new compte (9988775564,0);
//print_r ($compte1);
$compte22=new compte (741852963,0);
$client2=new client ("123456",array($compte12,$compte22));
print_r ($client2);
echo "ici\n";
print_r ($client1->get_listeComptet());
 echo "la\n";

echo "1-> Afficher les infos du client\n"
	."2-> Afficher les infos d’un de ses compte\n"
    ."3-> Réaliser un retrait si le solde le permet\n"
	."4-> Réaliser un versement sur le compte\n"
	."5-> Réaliser un virement sur un autre compte\n"//(un des sien ou sur compte d’un autre client)
	."6-> Revenir au choix du client\n";
    $choix=readline(" entrer votre choix :");
    switch ($choix) {
        case 1:
            $client1->afficherSesInfos();
            $client2->afficherSesInfos();
            break;
            case 2:
                # code...
                break;
                case 1:
                    # code...
                    break;
                    case 1:
                        # code...
                        break;
                        case 1:
                            # code...
                            break;
                            case 1:
                                # code...
                                break;
                                case 1:
                                    # code...
                                    break;
        
        default:
            # code...
            break;
    }




?>