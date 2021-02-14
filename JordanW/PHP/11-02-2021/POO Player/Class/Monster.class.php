<?php 

    class Monster extends Character{

        public function __construct(){
            $this->_lifePoint=rand(20,100);
            $this->_strenghtPoint=rand(5,10);
        }
    }

?>