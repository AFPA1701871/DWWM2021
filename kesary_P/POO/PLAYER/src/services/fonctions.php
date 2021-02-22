<?php

function randomVS($player,$pseudo){
    if (rand(1,6)<= 2) {
        $banditManchot = new BanditManchot();
        $player->jouer($banditManchot,$player,$pseudo);
    }else {
        $monstre = new Monster(rand(20,100),rand(5,10));
        echo "Un monstre est apparu ! \n";
        echo "Le monstre a " . $monstre->get_lifePoint(). " points de vie et ". $monstre->get_strenghtPoint(). "points de dégats \n";
        if($monstre->get_lifePoint() >=61){
            $tempScore = 2;
        }else {
            $tempScore = 1;
        }
        while ($monstre->get_lifePoint() > 0) {
            $player->gameOver();
            $player->attack($monstre,$pseudo);
            readline("");
            if ($monstre->get_lifePoint() <= 0) {
                echo " Vous avez gagné votre combat ! \n";
                $player->set_score($player->get_score() + $tempScore);
                echo "Votre score est maintenant de ". $player->get_score(). "\n";
                readline("");
                break;
            }
            $monstre->attack($player,$pseudo);

        }
        $player->deplacement($pseudo,$player);
    }
}

?>