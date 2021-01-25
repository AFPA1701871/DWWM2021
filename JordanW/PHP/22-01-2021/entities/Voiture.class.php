<?php 

    class Voiture{
        
        private $_marque;
        private  $_modele;
        private  $_immatriculation;
        private  $_couleur;
        private  $_vitesse=0;
        private $_nombrePoint;
        private $_montantPV=0;

        private static $_tabVoiture=[];
        
        /*public function __construct(string $marque, string $modele, string $immatriculation, 
                                    string $couleur,int $nombrePoint){
            $this-> setMarque($marque);
            $this-> setModele($modele);
            $this-> setImmatriculation($immatriculation);
            $this-> setCouleur($couleur);
            $this-> setNombrePoint($nombrePoint);

            self::$_tabVoiture[]=$immatriculation;
        }*/
        public function __construct(string $immatriculation,int $nombrePoint){
           
            $this-> setImmatriculation($immatriculation);
            $this-> setNombrePoint($nombrePoint);
            self::$_tabVoiture[]=$immatriculation;
        }
        
        public static function testImmatriculation(string $immatriculation){
            if(in_array($immatriculation,self::$_tabVoiture)){
                echo "Immatriculation existe déjà !!";
                return true;
            }
            return false;
        }

        private function setMarque(string $marque){
            $this-> _marque=$marque;
        }
        private function setModele(string $modele){
            $this-> _modele=$modele;
        }
        private function setImmatriculation(string $immatriculation){
            $this-> _immatriculation=$immatriculation;
        }

        public function getImmatriculation(){
            return $this-> _immatriculation;
        }

        private function setCouleur(string $couleur){
            $this-> _couleur=$couleur;
        }

        public function setNombrePoint(int $nombrePoint){
            $this-> _nombrePoint=$nombrePoint;
        }

        public function accelerer(){
            $acceleration = rand(1,25);
            $this-> setVitesse($acceleration);
            return $acceleration;

        }

        public function setVitesse(int $acceleration){
            $this-> _vitesse+=$acceleration;
        }

        public function initVitesse(int $vitesse){
            $this-> _vitesse=$vitesse;
        }

        public function getVitesse(){
            return $this-> _vitesse;
        }

        public function enleverPoint(int $retirePoint){
            if( $this-> _nombrePoint < $retirePoint){
                $this-> _nombrePoint=0;
            }else{
                $this-> _nombrePoint-=$retirePoint;
            }
        }

        public function getNombrePoint(){
            return $this-> _nombrePoint;
        }

        public function setMontantPV(int $montant){
            $this-> _montantPV+=$montant;
        }

        public function getMontantPV(){
            return $this-> _montantPV;
        }
        
    }


?>  