<?php

    class Monster extends Character{

        static $_score;
        private $_pseudo;

        public function __construct(){
            Parent::__construct(rand(20,100),rand(5,10));
        }

    }

?>