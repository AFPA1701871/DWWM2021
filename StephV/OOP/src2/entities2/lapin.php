<?php
class Lapin extends Animal
{
    private $enVie=true;

    public function __construct($color,$nbPaws, string $enVie){
        Parent::__construct($color,$nbPaws);
        $this->enVie=$enVie;

    }

    public function crier(){
        echo "le lapin ".$this->set_color." crie \n";
    }
    public function seNourrir(){
        echo "la lapin ".$this->set_color." est en train de se nourrir.\n";
    }
    public function fuir(){
        echo "le lapin".$this->set_color.$this->seDeplacer()." et se sauve\n";
        
    }


}
?>