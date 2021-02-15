<?php
    class Player extends Character{
        private $score;
        private $pseudo;

        public function __construct(int $lifePoint,int $strenghtPoint,int $score,string $pseudo){
            parent :: __construct($lifePoint,$strenghtPoint);
            $this->set_score($score);
            $this->set_pseudo($pseudo);
        }

        public function get_score(){
            return $this->score;
        }

        public function set_score(int $score){
            $this->score = $score;
        }

        public function get_pseudo(){
            return $this->pseudo;
        }

        public function set_pseudo($pseudo){
            $this->pseudo = $pseudo;
        }

        public function move(string $direction){
            echo "\n".$this->pseudo." move to the $direction.\n";
        }

        public function attack($player,$monster){
            echo $player->get_pseudo()." attack the monster and deal a total of ".$player->get_strenghtPoint()." damages to him.\n";
            $monster->set_lifePoint($monster->get_lifePoint()-$player->get_strenghtPoint());
        }

        public function play($player,$bandit){
            do {
                $play=readline("Do you want to play with him ? (O/N) : ");
                if(strtolower($play)=="n"){
                    return;
                }
            } while (strtolower($play)!="o");
            $winOrLoseHp=$bandit->winOrLose($player);
            $player=$bandit->howManyWeWinOrLose($player,$winOrLoseHp);
            return $player;
        }
    }
?>