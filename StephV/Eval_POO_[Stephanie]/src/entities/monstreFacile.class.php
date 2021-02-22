<?php
class MonstreFacile
{
    protected $alive; 
    //mettre aussi un dé au monstre
    //pour savoir valeur point qd tué

    public function __construct($alive=true){
        $this->set_alive=$alive;
    }

    public function get_alive(){
        return $this->alive;
    }
    //forgot setter for alive !!!

    public function attack($joueur){
        echo "Le monstre attaque\n";  
        
    }
}


?>