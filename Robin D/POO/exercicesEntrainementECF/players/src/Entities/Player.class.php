<?php
    class Player extends Character {
        private $_score;
        private $_pseudo;

        public function get_score(){
            return $this->_score;
        }
    
        public function set_score($score){
            $this->_score = $score;
        }
    
        public function get_pseudo(){
            return $this->_pseudo;
        }
    
        public function set_pseudo($pseudo){
            $this->_pseudo = $pseudo;
        }

        public function __construct($lifepoint,$strenghtPoint,$score,$pseudo) {
            Parent::__construct($lifepoint,$strenghtPoint);
            $this->set_score($score);
            $this->set_pseudo($pseudo);
        }

        public function move() {
        // description des déplacements possibles
        echo "les déplacements possibles sont : \n\n";
        echo "\t 1 - Nord\n";
        echo "\t 2 - Sud\n";
        echo "\t 3 - Est\n";
        echo "\t 4 - Ouest\n\n";
        
        // demande du déplacement du player souhaité par l'utilisateur
        do {
            $deplacement=readline("entrez le numéro correspondant à votre choix de déplacement !");
        } while ($deplacement<1 or $deplacement>4);
        
        switch ($deplacement) {
            case 1:
                $deplacement="Nord";
                echo "vous vous déplacer vers le Nord\n";
                break;
            case 2:
                $deplacement="Sud";
                echo "vous vous déplacer vers le Sud\n";
                break;
            case 3:
                $deplacement="Est";
                echo "vous vous déplacer vers l'Est\n";
                break;
            case 4:
                $deplacement="Ouest";
                echo "vous vous déplacer vers l'Ouest\n";
                break;
            }
        }

        public function play($banditManchot) {
            $win=$banditManchot->winOrLose();
            $nbLifePoints=$banditManchot->howManyWeWinOrLose();
            if ($win==true) {
                $this->set_lifepoint($this->get_lifepoint()+$nbLifePoints);
                echo $this->_pseudo." gagne ".$nbLifePoints." points de vie"."\n";
                echo "il reste ".$this->get_lifepoint()." points de vie à ".$this->_pseudo."\n\n";
            }
            elseif ($win==false) {
                $this->set_lifepoint($this->get_lifepoint()-$nbLifePoints);
                echo $this->_pseudo." perd ".$nbLifePoints." points de vie"."\n";
                echo "il reste ".$this->get_lifepoint()." points de vie à ".$this->_pseudo."\n\n";
            }
        }

        public function attack(Character $character) {
            echo $this->_pseudo." attaque et inflige ".$this->_strenghtPoint." dégâts"."\n";
            echo "l'ennemi perd ".$this->_strenghtPoint." points de vie"."\n";
            $character->set_lifepoint($character->get_lifePoint()-$this->_strenghtPoint);
            echo "il reste ".$character->get_lifepoint()." points de vie à l'ennemi"."\n\n";
        }
    }
?>