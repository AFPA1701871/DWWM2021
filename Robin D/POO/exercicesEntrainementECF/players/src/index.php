<?php
    // permet l'autoload des classes
    function chargementClasse($classe) {
        require("Entities/".$classe.".class.php");
    }
    spl_autoload_register("chargementClasse");

    $pseudo=readline("entre votre pseudo: "); // entrée du pseudo par l'utilisateur
    $player= new Player(100,20,0,$pseudo); // création du player

    do {
        $continue=readline("voulez-vous continuer ? (o/n) : ");
    } while ($continue!="o" and $continue!="n");

    if ($continue=="o") {
        
        do {

            $player->move(); // demande de la direction du déplacement au player

            $rencontre=random_int(1,6); // définition de la rencontre aléatoire

            if ($rencontre==1 or $rencontre==2) { // si 
                echo "vous rencontrez un bandit manchot\n";
                $banditManchot= new BanditManchot; // création d'un bandit manchot
                
                do { // on demande si le player veut jouer au jeu de hazard
                    $playBanditManchot=readline("voulez-vous jouer à un jeu de hasard qui vous fera gagner ou perdre des points de vie ? (o/n)");
                } while ($playBanditManchot!="o" and $playBanditManchot!="n");

                if ($playBanditManchot=="o") {
                    echo $player->get_pseudo()." joue avec le bandit manchot"."\n";
                    $player->play($banditManchot); // lancement du jeu avec le bandit manchot
                    if ($player->get_lifepoint()<=0) { // si le player n'a plus de point de vie
                        echo "† ".$player->get_pseudo()." est mort †\n\n"; // on indique que le joueur est mort
                    }
                }
            }
            elseif ($rencontre>=3 and $rencontre<=6) {
                echo "vous rencontrez un monstre\n";
                $monstre= new Monster(random_int(20,100),random_int(5,10)); // création d'un monstre
                $maxLifePointMonstre=$monstre->get_lifePoint();
                
                do { // boucle de combat au tour par tour
                    $player->attack($monstre); // attaque du monstre par le player
                    if ($monstre->get_lifepoint()>0) { // contrôle sur les points de vie du monstre
                        $monstre->attack($player); // attaque du player par le monstre
                    }
                } while ($player->get_lifepoint()>0 and $monstre->get_lifepoint()>0); // contrôle sur les points de vie du player et du monstre

                if ($player->get_lifepoint()>0) { // si le joueur est encore vivant
                    if ($maxLifePointMonstre<=60) { // si le nombre de point de vie initial du monstre est inférieurou égal à 60
                        $player->set_score($player->get_score()+1); // on incrémente le score du joueur de 1
                    }
                    else { // si le nombre de point de vie initial du monstre est supérieur à 60
                        $player->set_score($player->get_score()+2); // on incrémente le score du joueur de 2
                    }
                    
                    echo "le score de ".$player->get_pseudo()." est :".$player->get_score()."\n\n"; // on indique le score du player
                }
                else { // sinon
                    echo "† ".$player->get_pseudo()." est mort †\n\n"; // on indique que le joueur est mort
                }
            }

            if ($player->get_lifepoint()>0) { // si le player est encore en vie
                do { // demander si le player veut continuer ou quitter
                    $continue=readline("voulez-vous continuer ? (o/n) : ");
                    echo "\n";
                } while ($continue!="o" and $continue!="n");
                /*
                $continue=checkContinue();
                */
            }
            
        } while ($player->get_lifepoint()>0 and $continue=="o");

        echo "le score de ".$player->get_pseudo()." est :".$player->get_score()."\n\n"; // à la fin du programme, on indique le score du player

            
    }
?>