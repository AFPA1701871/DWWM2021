<?php 

	class Chasseur extends Humain{
        protected $_arme;
    	
        public function __construct(String $nom,string $arme){
            Parent::__construct($nom);
            $this->_arme=$arme;
            echo "Le chasseur ".$this->get_nom()." à été créer avec un ".$this->_arme."\n";
        }

        public function chasser(Lapin $lapin){
            $intChasse = (rand(1,6));
            if($intChasse==1 || $intChasse==6){
                echo "Le pauvre petit lapin ".$lapin->_couleur." est malheureusement mort \n";
                $lapin->_enVie=false;
            }else{
                echo $this->get_nom()." tire sur le lapin avec son ".$this->_arme." est… le rate \n";
                $lapin->fuir();
            }
        }

        public function seDeplacer(){
            echo $this->get_nom() ." avance avec son ".$this->_arme."\n";
        }

    }

?>