<?php
class Radar{
    private $_speedLimit;

    public function __construct(Int $_speedLimit){
        $this->setSpeedLimit($speedLimit);
    }
    private function setSpeedLimit(int $speedLimit){
        if(!is_Int($speedLimit)){
            throw new Exception ("$speedLimit must be an integer!");
        }
        $this->_speedLimit=$speedLimit;
    }
    
    public function getSpeedLimit(){
        return $this->_speedLimit;
    }
    
    public function flash(Int $speedCar){
        if ($speedCar>$this->_speedLimit){
             return $trespass=TRUE;
        }
        else {
            return $trespass=FALSE;
        }
    }

}

?>