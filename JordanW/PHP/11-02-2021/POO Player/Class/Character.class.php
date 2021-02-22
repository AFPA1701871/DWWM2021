<?php 

    abstract class Character{
        protected $_lifePoint;
        protected $_strenghtPoint;

        public function __construct(int $lifePoint,int $strenghtPoint){
            $this->_lifePoint=$lifePoint;
            $this->_strenghtPoint=$strenghtPoint;
        }

        public function attack(Character $character){
            $character->_lifePoint-=$this->get_strenghtPoint();
        }

        public function reduceLifePoint(int $lifePoint){
            $this->toStringLifePoint();
            echo "Reduction de $lifePoint\n";
            $this->_lifePoint-=$lifePoint;
            $this->toStringLifePoint();
        }

        public function addLifePoint(int $lifePoint){
            $this->toStringLifePoint();
            echo "Ajout de $lifePoint\n";
            $this->_lifePoint+=$lifePoint;
            $this->toStringLifePoint();

        }

        public function get_lifePoint(){
            return $this->_lifePoint;
        }

        public function get_strenghtPoint(){
                return $this->_strenghtPoint;
        }

        public function toStringLifePoint(){
            echo "Point de vie actuel : ".$this->get_lifePoint()."\n";
        }
    }

?>