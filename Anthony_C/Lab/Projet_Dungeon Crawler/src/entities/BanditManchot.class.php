<?php
    class BanditManchot{      
        public function winOrLose(){
            echo "\n";
            do {
                $headOrTails=readline("He show you a piece and ask you head or tail ? : ");
                if (strtolower($headOrTails) != "head" and strtolower($headOrTails) != "tail") {
                    echo "Sorry stranger, this is not a good answer.\n\n";
                }
            } while (strtolower($headOrTails) != "head" and strtolower($headOrTails) != "tail");
            if(strtolower($headOrTails) == "head"){
                $headOrTails=1;
            }else{
                $headOrTails=2;
            }
            echo "He launch the piece in the air and catch it!\n";
            $piece=rand(1,2);
            if ($piece == 1){
                echo "It's head !\n";
            }else{
                echo "It's tail !\n";
            }
            if($piece == $headOrTails){
                $winOrLoseHp=true;
            }else{
                $winOrLoseHp=false;
            }
            return $winOrLoseHp;
        }

        public function howManyWeWinOrLose($player,$winOrLoseHp){
            if($winOrLoseHp==true){
                $hp=rand(1,10);
                displayWin($hp);
                $player->set_lifePoint($player->get_lifePoint()+$hp);
            }else{
                $hp=rand(1,10);
                displayLose($hp);
                $player->set_lifePoint($player->get_lifePoint()-$hp);
            }
            return $player;
        }
    }
?>