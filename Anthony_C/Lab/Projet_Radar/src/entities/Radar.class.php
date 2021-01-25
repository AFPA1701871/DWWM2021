<?php

    class Radar{
        private $_limitation;

        public function __construct(int $limitation){
            $this->set_limitation($limitation);
        }
        
        public function get_limitation(){
            return $this->_limitation;
        }

        public function set_limitation(int $limitation){
            $this->_limitation = $limitation;
        }

        public function flasher(int $speed){
            if ($speed<=$this->_limitation+10 and $speed > $this->_limitation){
                return $pv = 0;
            }else if ($this->_limitation+10<$speed and $speed <= $this->_limitation+20){
                return $pv = 1;
            }else if ($speed > $this->_limitation+20){
                return $pv = 2;
            }else{
                return $pv = 3;
            }
        }
    }
?>