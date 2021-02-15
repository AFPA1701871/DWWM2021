<?php
class Cat{
    private $race="Mau";  
    private $color;
    private $action;
    private $lifes=9;
    
    public function miaw (string $race){
        echo "Schau mal, eines $race\n";
    }         
    public function night (string $race){
        echo "$race is hunting at dawn\n";
    } 
    public function hunt (){
        echo $this->race." is a born hunter";
    }
    public function setColor($color){
        $this->color=$color;
    }
    public function getColor(){
        return $this->color;
    }
    public function getLifes(){
        return $this->lifes;
    }
    public function setLifes($lifes){
        $this->lifes=$lifes;
    }
    public function getRace(){
        return $this->race;
    }
    public function setRace($race){
        $this->race=$race;
    }
      
}
$cat=new Cat;
$cat->miaw("Mau");
$cat->night("Mau");
$cat->hunt(); 
$cat->setColor=$color="\nfauve";
echo $color; 
echo $cat->setLifes(11);
echo "\n";
echo "This ".$cat->getRace()." has ".$cat->getLifes()." lifes instead of 9"; 
 
?>