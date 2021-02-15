<?php
class Joueur
{
    private $life;

    public function __construct(int $life=50){
        $this->set_life=$life;
    }

    public function get_life(){
        return $this->_life;
    }

    public function estVivant(int $life){
        if ($life>0){
            $alive==true; 
            echo "Le héros a survécu\n"; 
        }else{
            $alive==false;
            echo "Le héros vient de mourrir\n";
            exit;
        }
    }

    public function attack($monstre){
        echo "Le héros attaque le monstre\n";
        
    }

    public function subitDegats($degats=10){
        //$this->degats=$degats;
        echo "Le héros subit ".$this->degats." points de vie";
        $life=$life-10;


    }
}
?>