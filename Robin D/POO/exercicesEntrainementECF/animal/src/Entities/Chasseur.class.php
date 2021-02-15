<?php
    class Chasseur extends Humain {
        private $_arme;

        public function get_arme(){
            return $this->_arme;
        }
    
        public function set_arme($arme){
            $this->_arme = $arme;
        }

        public function __construct($nom,$arme) {
            Parent::__construct($nom);
            $this->set_arme($arme);
            echo "le chasseur ".$this->_nom." a été créé avec un ".$this->_arme."\n";
        }

        public function chasser($animal) {
            echo $this->get_nom()." tire sur le lapin avec son fusil et… ";
            $random=random_int(1,6);
            if ($random==1 or $random==6) {
                echo "le touche\n";
                $animal->set_enVie(false);
                echo "Le pauvre petit lapin ".$animal->get_couleur()." est malheuresement mort\n";
            }
            else {
                echo "le rate\n";
            }
        }

        public function seDeplacer() {
            echo $this->_nom." avance avec son ".$this->_arme."\n";
        }
    }
?>