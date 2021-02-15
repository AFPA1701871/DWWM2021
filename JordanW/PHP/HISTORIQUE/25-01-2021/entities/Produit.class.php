<?php 

    class Produit{
        private $_nom;
        private $_prix;
        private $_info;

        public function __construct(string $nom,float $prix){
            $this-> setNom($nom);
            $this-> setPrix($prix);
        }
        
        public function toString(){
            echo $this->_nom ." ". $this->_prix . "€";
        }

        private function setNom(string $nom){
            $this-> _nom=$nom;
        }
        private function setPrix(float $prix){
            $this-> _prix=$prix;
        }
        private function setInfo(string $info){
            $this-> _info=$info;
        }

        public function getNom(){
            return $this-> _nom;
        }
        public function getPrix(){
            return $this-> _prix;
        }
        public function getInfo(){
            return $this-> _info;
        }

        public function getLimitation(){
            return $this-> _limitation;
        }

        public function controleVitesse(int $vitesse){
            if($vitesse > $this-> _limitation){
                return true;
            }
            return false;
        }
        
    }

?>
