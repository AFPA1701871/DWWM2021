<?php

    class Monster extends Character{

        //constructeur
        public function __construct($lifepoint,$strenghtPoint){
            parent::__construct($lifepoint,$strenghtPoint);
        }
        //fonction pour attaquer
        public function attack(Character $player,$inputPseudo){
            echo "Le monstre attaque $inputPseudo et lui inflige ". $this->get_strenghtPoint() ." points de dégâts" ."\n";
            $player->set_lifepoint($player->get_lifepoint()-$this->get_strenghtPoint());
            echo "$inputPseudo a maintenant ". $player->get_lifepoint() ." points de vie" ."\n\n";
        }
    }

?>