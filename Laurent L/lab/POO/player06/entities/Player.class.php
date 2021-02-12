<?php

    class Player extends Character{

        private $_score;
        private $_pseudo;

        public function __construct($lifePoint,$strenghtPoint,$score,$pseudo){
            Parent :: __construct($lifePoint,$strenghtPoint);
            $this->set_score($score);
            $this->set_pseudo($pseudo);
        }

        // Méthodes

        public function move(){
            return $this->get_pseudo()." pour vous déplacer, taper \n8 pour vous diriger vers le Nord\n2 pour vous diriger vers le Sud\n4 pour vous diriger vers l'Est\n6 pour vous diriger vers l'ouest";
            
        }

        public function levelUpScore($adversairePVInitial){
            if($adversairePVInitial>=20 && $adversairePVInitial<=60){
                $levelUp = $this->get_score()+1;
                $this->set_score($levelUp);
            }else{
                $levelUp = $this->get_score()+2;
                $this->set_score($levelUp); 
            }
        }


        // get et set

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
            $this->_pseudo =$pseudo;
        }
        
    }

?>