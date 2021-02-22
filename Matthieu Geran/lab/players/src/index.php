<?php

    function chargementClasse($classe){
        require("./entities/".$classe.".class.php");
    }

    spl_autoload_register("chargementClasse");

    $pseudo = readline("Comment vous nommez-vous, aventurier ? ");
    $joueur = new Player(0,$pseudo);
    

    do{

        do{
            $commande = readline("Dans quelle direction souhaitez-vous vous déplacer ? (Nord/Est/Sud/Ouest - Quitter) ");
        } while (strtolower($commande) <> "nord" and strtolower($commande) <> "ouest" and strtolower($commande) <> "sud" and strtolower($commande) <> "est" and strtolower($commande) <> "quitter");
        
        $ennemi = rand(1,3);

        if ($ennemi <>0){
            $monstre = new Monster();

            if ($monstre->getLifePoint() < 61){
                $scoreEventuel = 1;
            } else {
                $scoreEventuel = 2;
            }

            echo "Un monstre, au combat !\n";
            echo $pseudo . " : " . $joueur->getLifePoint()." PV - " . $joueur->getStrenghtPoint() . " points de force.\n";
            echo "Monstre : " . $monstre->getLifePoint()." PV - " . $monstre->getStrenghtPoint() . " points de force.\n";

            do{
                $joueur->attack($monstre);
                echo "[JOUEUR] " . $pseudo . " inflige " . $joueur->getStrenghtPoint() . " points de dégâts au monstre, qui a désormais " . $monstre->getLifePoint() . " PV.\n";

                if ($monstre->vivant()){
                    $monstre->attack($joueur);
                    echo "[ENNEMI] Le monstre inflige " . $monstre->getStrenghtPoint() . " points de dégâts à " . $pseudo . ", qui a désormais " . $joueur->getLifePoint() . " PV.\n";
                }
            } while ($monstre->vivant());

            if ($monstre->vivant() == false and $joueur->vivant()){
                $score = $joueur->getScore() + $scoreEventuel;
                $joueur->setScore($score);
            }
        }

    } while ($commande <> "quitter" and $joueur->vivant() == true);

    if (!$joueur->vivant()){
        echo "Didier est mort, gloire à notre héros !\n";
    }
    echo "SCORE : " . $joueur->getScore();
    

?>