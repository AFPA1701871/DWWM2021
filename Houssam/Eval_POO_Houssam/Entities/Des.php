<?php

    class Des {
        public function jetDeDes($value){
                $value = rand(1,6);
            
                if ($value == 1){
                    $this->_value = 100;
                }            
                if ($value == 2){
                    $this->_value = 2;
                }            
                if ($value == 3){
                    $this->_value = 3;
                }           
                if ($value == 4){
                    $this->_value = 4;
                }          
                if ($value == 5){
                    $this->_value = 5;
                }       
                if ($value == 6){
                    $this->_value = 60;
                }
                return ($value);
        }

        public function getValue(){
            return $this->value;
        }

    }

    ?>