<?php
   
    function chargementClass($class){
        require( "./entities/".$class .'.class.php');
    }
    spl_autoload_register('chargementClass');

    //$score=0;
    $pseudo=readline(" entrer votre pseudo :");
    $player=new player ($pseudo);     // cree notre joueur
    $quit=1;
do {
     $adverssaire=rand(1,6);                // choix de l'advressaire aleatoire
            echo "*************************** coix de distination ********************************\n"
                 ."0-->quiter\n"
                 ."1-->Nord\n"
                 ."2-->Sud\n"
                 ."3-->Est\n"
                 ."4-->Ouest\n";
        do {
                    
            $distination=readline("entrer votre choix  :");
                 switch ($distination) {
                    case 0:
                        echo " merci pour votre visite \n";
                        break;
                     case 1:
                         echo " bienvenue dans le chnord\n";
                         break;
                         case 2:
                            echo " bienvenue dans le sud\n";
                            break;
                            case 3:
                                echo " bienvenue dans l'est\n";
                                break;
                                case 4:
                                    echo " bienvenue dans le ouest\n";
                                    break;
                     
                     default:
                         echo " votre saisie est incorrect\n";
                         break;
                    }
            } while ($distination > 4); 
    if ($adverssaire>2 and $distination!=0 ) {
            echo "************ vous aller  d'affronter le MONSTRE *********************************\n";
            $monstre=new monstre();
            $vieMonstre=$monstre->get_lifepoint();
        do {
                echo "******************* le joueur attaque *******************************************\n";
                echo "\n";
                echo "******************* les point de vie du monstre *********************************\n";
                echo "le monstre a ". $monstre->get_lifepoint()." de vie \n";
                echo "******************* le joueur attaque *******************************************\n";
                echo " player : j'attaque le monstre avec ".$player->get_forcepoint()." point de force \n";
                $restePointMonstre =($monstre->get_lifepoint()-$player->get_forcepoint());
                $monstre->set_lifepoint($restePointMonstre);
                echo "******************* les point de vie du monstre restant *************************\n";
                echo "le monstre lui reste ".$monstre->get_lifepoint()." de vie \n"; 
                sleep(1);
                    if ($monstre->get_lifepoint()<=0) {
                       break;
                    }
                echo "******************* le monstre attaque ******************************************\n";
                
                echo "\n";
                echo "******************* les point de vie du joueur **********************************\n";
                echo "le joueur a ". $player->get_lifepoint()." de vie \n";
                echo "******************* le monstre attaque ******************************************\n"; 
                echo $monstre->get_nom()." j 'attaque le joueur avec ".$monstre->get_forcepoint()." point de force \n"; 
                $restePointPlayer =($player->get_lifepoint()-$monstre->get_forcepoint());
                $player->set_lifepoint($restePointPlayer);
                echo "******************* les point de vie du joueur restant **************************\n";
                echo "le joueur lui reste ".$player->get_lifepoint()." de vie \n";
                sleep(1);   
            } while ($player->get_lifepoint()> 0 and $monstre->get_lifepoint()>0 );
                    if ($player->get_lifepoint()>$monstre->get_lifepoint()and  $vieMonstre<60 ) {
                        echo "******************* vous avez ganger  :) ****************************************\n"
                            .""
                            ."";
                        $score++;
                        $player->set_score($score);
                        echo "******************* SCORE *******************************************************\n"
                            ." votre score est de ".$player->set_score($score)."\n";
                        echo "*********************************************************************************\n"
                            ."\n";
                       
                    }    
                elseif ($player->get_lifepoint()>$monstre->get_lifepoint() and  $vieMonstre>60){
                        echo "******************* vous avez ganger  :) ****************************************\n"
                            .""
                            ."";
                        $score=$score+2;
                        $player->set_score($score);
                        echo "******************* SCORE *******************************************************\n"
                            ." votre score est de ".$player->set_score($score)."\n";
                        echo "*********************************************************************************\n"
                            ."\n";   
                    }
                else {
                       echo "******************* vous avez perdu :( ******************************************\n";
                       echo " le monstre a ganger\n";
                       echo "*********************************************************************************\n";
                    }
    }
    elseif($adverssaire<=2 and $distination!=0 ) {
            echo "********** est ce que vous accepter  d'affronter le BANDIT MANCHOT ***************\n";
            $quit=readline("appiuyer sur une touche touche pour accepter ou sur 0 pour quiter :");
            if ($quit!="0") {
                $manchot=new manchot();
                echo $manchot->get_nom()."\n";
                echo "************ vous accepter  d'affronter le bandit manchot ***************************\n"
                    ."\n"
                    ."\n";
                echo "*************** le bandit manchot tire au sort **************************************\n";
                $tabresultat= $manchot->tirage();
                if ($tabresultat[1]=="1") {
                    echo "******************* vous avez ganger ************************************************\n";
                    echo  "votre total de points de vie etait de ".$player->get_lifepoint()." point de vie \n";
                    echo "*************************************************************************************\n";
                    $scoreplayer=$player->get_lifepoint()+$tabresultat[0];
                    $player->set_lifepoint($scoreplayer);
                    echo "*******************  POINT DE VIE ***************************************************\n";
                    echo "  vous avez maintenant ".$player->get_lifepoint() ." point de vie \n";
                    echo "*************************************************************************************\n";
                }
                else {
                    echo "******************* vous avez perdu ************************************************\n";
                    echo  "votre total de points de vie etait de ".$player->get_lifepoint()." point de vie \n";
                    echo "*************************************************************************************\n";
                    $scoreplayer=$player->get_lifepoint()-$tabresultat[0];
                    $player->set_lifepoint($scoreplayer);
                    echo "*******************  POINT DE VIE ***************************************************\n";
                    echo "  vous avez maintenant ".$player->get_lifepoint(). " point de vie \n";
                    echo "*************************************************************************************\n";
                }
            }
        }
        if ($player->get_lifepoint()>0 and $distination!=0 ) {
            $quit=readline ( " enterez une touche pour continuer ou  0 pour quiter le jeux :");
        }
        
        if ($quit!="0"  and $player->get_lifepoint()>0 and $distination!=0 ) {
                echo"\n";
                echo "\n";
                echo "**********************************************************************************\n";
                echo "**************************** nouvelle partie *************************************\n";
                echo "**********************************************************************************\n";
                echo"\n";
                echo "\n";
        }
  }while ($quit != "0" and $player->get_lifepoint()>0 and $distination!=0 );
    if ($player->get_lifepoint()<=0) {
         echo " vous avez perdu vos point de vie !!!!\n";
    }
                echo "******************* SCORE FINAL ***************************************************\n";
                echo " a bientot ".$player->get_pseudo()." votre score est de ".$player->get_score()."\n";
                echo "***********************************************************************************\n";
    echo "\n";
    echo "\n";
    
    ?>