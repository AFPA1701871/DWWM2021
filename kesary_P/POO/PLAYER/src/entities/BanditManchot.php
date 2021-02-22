<?php

class BanditManchot{
    //Méthode pour déterminer si vous avez gagné ou perdu
    public function WinOrLose(){
        $gagne = false;
        if(rand(1,2)==2){
            echo "Vous avez gagné. Bravo!! \n";
            $gagne = true;
        }else {
            echo "Dommage, vous avez perdu \n";
            $gagne = false;
        }
        return $gagne;
    }

    //Méthode pour connaître le nombre point à retirer ou alors on gagne des points de vie
    public function howManyWeWinOrLose($player, $pseudo){
        $resultatJeu = $this->WinOrLose();
        $probabilite = rand(1,10);
        if ($resultatJeu == true) {
            $player->set_lifePoint($player->get_lifePoint()+$probabilite);
            echo $pseudo . " a gagné ". $probabilite . " points de vie \n";
            echo $pseudo . " a désormé ". $player->get_lifePoint(). " points de vie \n";
        }else {
            $player->set_lifePoint($player->get_lifePoint()-$probabilite);
            echo "$pseudo a perdu $probabilite points de vie" ."\n";
            echo "$pseudo a maintenant ". $player->get_lifepoint() ." points de vie" ."\n\n";
        }
        return $player;    
    }
}

?>