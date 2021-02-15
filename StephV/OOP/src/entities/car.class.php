<?php
class Car{
    private $make;  
    private $model;
    private $matric;
    private $color;
    private $speedCar;
    private $points;
    private $fee=0;
    
    public function __construct(String $make, String $model, Int $matric, String $color, Int $points){
        $this->setMake($make);
        $this->setModel($model);
        $this->setMatric($matric);  
        $this->setColor($color);
        $this->setPoints($points);
    }

    public function getMake(String $make){ //also ok to write(see cursus): public function get_make(){}
		return $this->make=$make;
	}
    public function setMake($make){
		$this->make = $make;
	}


	public function getModel(){
		return $this->model=$model;
    }
    public function setModel(String $model){;
        $this->model=$model;
    }


	public function getMatric(){
		return $this->matric=$matric;
	}
    public function setMatric(Int $matric){
        $this->matric=$matric;
    }


	public function getColor($color){
		return $this->color=$color;
    }
    public function setColor(Int $color){
        $this->color=$color;
    }


    public function getPoints(){
		return $this->points;
	}
	public function setPoints($points){
		$this->points = $points;
	}


	public function getFee(){
		return $this->fee;
	}
	public function setFee($fee){
		$this->fee = $fee;
	}
    

    public function startAccelerate(){
        $speed=rand(10,30);
        $acc=rand(1, 25); 
        $speedCar=$speed+$acc;
        return $speedCar;
    }
}


?>