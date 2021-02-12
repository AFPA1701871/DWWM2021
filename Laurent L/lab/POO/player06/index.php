<?php

    require ("./service/fonctions.php");
    spl_autoload_register('chargerClasse');

    $pseudo = readQuit("Quel est votre pseudo ? ");

    $player = new Player(100,20,0,$pseudo);

    do{      // bouclage jusqu'à la fin de vie du player
        do{        // bouclage pour le deplacement ou pour quitter
            echo "\nSi vous désirez quitter, alors taper quit.\n\nSinon, ";
            echo $player->move();
            $choixJouer = strtoUpper(readline("\nVotre choix : "));
        }while ($choixJouer!="2"&&$choixJouer!="4"&&$choixJouer!="6"&&$choixJouer!="8"&&$choixJouer!="QUIT");

        // Détermination de la rencontre aléatoire entre Banditmancho (1) ou Monstre (0 ou 2)
        if($choixJouer!="QUIT"){
            $rencontreAléatoire = random_int(0,2);
            ($rencontreAléatoire==1) ? $choixJouer = "BanditManchot" : $choixJouer = "Monstre";
            echo "\nVotre déplacement vous  améne face à un $choixJouer !";
        }

        // gestion rencontre du BanditManchot / monstre ou quit
        switch($choixJouer){
            case "BanditManchot" :
                do{
                    $choix = strtoupper(readline("\nVoulez-vous jouer au BanditManchot ? "));
                }while($choix !="OUI" && $choix != "NON");
                if ($choix == "OUI"){
                    $actionAleatoire = Banditmanchot::winOrLose();
                    $pointVieAleatoire = Banditmanchot::howManyWeWinOrLose();
                    if($actionAleatoire == "Win"){
                        $pointDeVie = $player->get_lifePoint()+$pointVieAleatoire;
                        $player->set_lifePoint($pointDeVie);
                        echo "\n".$player->get_pseudo()." vous avez récupéré $pointVieAleatoire Points de Vie. Ce qui porte votre total à ".$player->get_lifePoint()." PV.";
                    }else{
                        $pointDeVie = $player->get_lifePoint()-$pointVieAleatoire;
                        $player->set_lifePoint($pointDeVie);
                        echo "\n".$player->get_pseudo()." vous avez perdu $pointVieAleatoire Points de Vie. Ce qui porte votre total à ".$player->get_lifePoint()." PV.";
                    }
                }else{
                    break;
                }
                break;
            case "Monstre":
                $monstre = new Monster(random_int(20,100),random_int(5,10));
                $monstrePVInitiaux = $monstre->get_lifePoint();
                do{
                    $player->attack($monstre);
                    $monstre->attack($player);
                }while($player->get_lifePoint()<=0 && $monstre->get_lifePoint()<=0);
                if($player->get_lifePoint()>0){
                    $player->levelUpScore($monstrePVInitiaux);
                    echo "\n".$player->get_pseudo()." vous avez térrassé le monstre.\nVous avez encore ".$player->get_lifePoint()." points de vie\n";
                }else{
                    echo "\n".$player->get_pseudo().", vous n'avez pas survécu à votre quête.\nVotre score est de ".$player->get_score().".\nGame Over.\n";
                }  
                break;
            case"QUIT":
                echo $player->get_pseudo()." ,vous avez interrompu la partie.\nVotre score est de ".$player->get_score().".";
                exit;
            default : 
                echo "Oups";
        }
    }while ($player->get_lifePoint()>0)
        







    



    

?>