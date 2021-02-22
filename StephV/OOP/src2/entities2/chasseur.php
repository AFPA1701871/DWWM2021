<?php
class Chasseur extends Humain{

    private string $_arme;

    public function __construct(){
        Parent::__construct("Paul");
        $this->_arme="fusil";
        $this->_nom="Paul";
    }

    public function getArme(){
        return $this->_arme;
    }
    public function setArme(string $arme){
        $this->_arme=$arme;
    }

    public function seDeplacerAvecSonFusil(Chasseur $chasseur){
        echo $this->seDeplacer().$this->getArme()." à la main\n";
    }  
   
    public function chasser(Lapin $lapin){
        echo $this->getNom()." tire sur le lapin ".$lapin->getColor()." et ";
        $lapin=new Lapin("blanc",4); 
        $shot=(rand(1,6));
        if ($shot==1 OR $shot==6){
            $lapin->setEnVie(false);
            $lapin->dies();

        }else{
            $lapin->setEnVie(true);
            echo "rate son tir,\n";
            $lapin->fuir();
        }
    }
}

?>