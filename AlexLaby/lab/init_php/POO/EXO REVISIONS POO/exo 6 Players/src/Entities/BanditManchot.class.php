<?php

    class BanditManchot{
        //Fonction pour savoir si gagnant ou perdant
        public function winOrLose(){
            $win=false;
            if(rand(1,2)==2){
                echo "Vous avez gagné au jeu de hasard \n\n";
                $win=true;
            }else{
                echo "Vous avez perdu au jeu de hasard \n\n";
                $win=false;
            }
            return $win;
        }
        //Fonction pour savoir combien on retire ou on gagne de pv
        public function howManyWeWinOrLose($player,$inputPseudo){
            $saveWin=$this->winOrLose();
            $random=rand(1,10);
            if($saveWin==true){
                $player->set_lifepoint($player->get_lifepoint()+$random);
                echo "$inputPseudo a gagné $random points de vie" ."\n";
                echo "$inputPseudo a maintenant ". $player->get_lifepoint() ." points de vie" ."\n\n";
            }else{
                $player->set_lifepoint($player->get_lifepoint()-$random);
                echo "$inputPseudo a perdu $random points de vie" ."\n";
                echo "$inputPseudo a maintenant ". $player->get_lifepoint() ." points de vie" ."\n\n";
            }
            return $player;
        }
    }

?>