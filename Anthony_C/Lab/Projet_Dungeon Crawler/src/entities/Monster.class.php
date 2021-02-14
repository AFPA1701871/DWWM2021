<?php
    class Monster extends Character{      
        public function __construct(int $lifePoint,int $strenghtPoint){
            parent :: __construct($lifePoint,$strenghtPoint);
        }

        public function attack($player,$monster){
            echo "The monster attack ".$player->get_pseudo()." and deal a total of ".$monster->get_strenghtPoint()." damages.\n";
            $player->set_lifePoint($player->get_lifePoint()-$monster->get_strenghtPoint());
        }
    }
?>