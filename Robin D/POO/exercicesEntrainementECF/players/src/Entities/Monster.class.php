<?php
    class Monster extends Character {

        public function attack(Character $character) {
            echo "le monstre attaque ".$character->get_pseudo()." et lui inflige ".$this->_strenghtPoint." dégâts"."\n";
            echo $character->get_pseudo()." perd ".$this->_strenghtPoint." points de vie"."\n";
            $character->set_lifepoint($character->get_lifePoint()-$this->_strenghtPoint);
            echo "il reste ".$character->get_lifepoint()." points de vie à ".$character->get_pseudo()."\n\n";
        }
        
    }
?>