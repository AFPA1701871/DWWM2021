<?php

    class Player extends Character{

        private $_score;
        private $_pseudo;

        public function __construct($score,$pseudo){
            Parent::__construct(100,20);
            $this->setScore($score);
            $this->setPseudo($pseudo);
        }

        public function setScore(Int $score){
            $this->_score = $score;
        }

        public function setPseudo(String $pseudo){
            $this->_pseudo = $pseudo;
        }

        public function getScore(){
            return $this->_score;
        }

        public function getPseudo(){
            return $this->_pseudo;
        }

    }

?>