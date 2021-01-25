<?php
class Cars{
    private $make;
    private $model;
    private $matric;
    public $color;
    

    public function getMake(String $make){
		return $this->make=$make;
	}
    public function setMake($make){
		$this->make = $make;
	}

	public function getModel(String $model){
		return $this->model=$model;
	}
    public function setModel($model){
		$this->model = $model;
	}

	public function getMatric(){
		return $this->matric=$matric;
	}
    public function setMatric($matric){
		$this->matric = $matric;
	}

	public function getColor(String $color){
		return $this->color=$color;
	}
    public function setColor($color){
		$this->color = $color;
	}
    public function numOfCar(){
        echo $make.$model.$matric.$color;
    }
    
    public function startAccelerate(){
        $speed=rand(10,30);
        return $speed;    
        $acc=rand(1, 25); 
        return $acc;
        $speedCar=$speed+$acc;
        return $speedCar;
    }
}


?>