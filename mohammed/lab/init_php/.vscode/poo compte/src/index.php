<?php
  function chargementClass($class){
    require( "./entities/".$class.'.class.php');
  }
spl_autoload_register('chargementClass');
require(".\services/fonction.php");
$compte1=new compte (223344556,400);
//print_r ($compte1);
$compte2=new compte (369258147,500);
$listeCompte=[$compte1,$compte2];
$client1=new client ("9876543",$listeCompte);
/////////////////////////////////////////////////////////
$compte12=new compte (9988775564,600);
$compte22=new compte (741852963,700);
$listeCompte1=[$compte12,$compte22];
$client2=new client ("123456",$listeCompte1);
do {
    echo "1-> Afficher les infos du client\n"
        ."2-> Afficher les infos d’un de ses compte\n"
        ."3-> Réaliser un retrait si le solde le permet\n"
        ."4-> Réaliser un versement sur le compte\n"
        ."5-> Réaliser un virement sur un autre compte\n"//(un des sien ou sur compte d’un autre client)
        ."6-> Revenir au choix du client\n";
        $choix=0;
        do {
            $i= readline("choisir client 1 ou 2  ou tapez quit pour quiter :");
        } while ($i!=1 and $i!=2 and $i!="quit" ) ; 
        if ($i!="quit") {

            do {
                $choix= readline(" entrer votre choix :");
            } while ($choix>6 and $choix!="quit") ;
            switch ($choix) {
                case 1:   
                            afficherInfo(${"client$i"});      
                    break;
                    case 2:
                        affichercompte(${"client$i"});
                        break;
                        case 3:
                            retraiArgent(${"client$i"});
                            break;
                            case 4:
                                versement(${"client$i"});                       
                                break;
                                case 5:
                                    do {
                                        $j= readline("choisir client a crediter 1 ou 2  :");
                                    } while ($j!=1 and $j!=2) ; 
                                    virement(${"client$i"},${"client$j"});//par 1 =client a crediter par2= client a debiter 
                                    // le choix du compte se fait dans la fonction
                                    break;
                                    case 6:
                                        return;
                                        
                default:
                    echo " merco de saisir un choix valide ou taper quit pour quiter :";
                    break;       
                }
        }
        $choix=readline(" voulez vous continuer o/n :");
    } while ($choix!="quit" and $choix!="n" and $i!="quit" );
    echo " merci pour votre visite et a bientot ";
?>