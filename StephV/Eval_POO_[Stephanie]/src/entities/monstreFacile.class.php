<?php
class MonstreFacile
{
    protected $alive;

    public function __construct($alive=true){
        $this->set_alive=$alive;
    }

    public function get_alive(){
        return $this->alive;
    }

    public function attack($joueur){
        echo "Le monstre attaque\n";  
        
    }
}


?>