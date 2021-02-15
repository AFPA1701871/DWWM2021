<?php
    abstract class Character{
        protected $lifePoint;
        protected $strenghtPoint;

        public function __construct(int $lifePoint,int $strenghtPoint){
            $this->set_lifePoint($lifePoint);
            $this->set_strenghtPoint($strenghtPoint);
        }

        public function get_lifePoint(){
            return $this->lifePoint;
        }

        public function set_lifePoint(int $lifePoint){
            $this->lifePoint = $lifePoint;
        }

        public function get_strenghtPoint(){
            return $this->strenghtPoint;
        }

        public function set_strenghtPoint($strenghtPoint){
            $this->strenghtPoint = $strenghtPoint;
        }

        abstract public function attack($player,$monster);
    }
?>