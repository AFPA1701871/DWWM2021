<?php
    class Radar{
        //Permet de set la limitation de vitesse par rapport à la valeur encodée par l'utilisateur
        private $_limitationVitesse;
        public function __construct(int $inputUserVitesse){
            $this->setLimitationVitesse($inputUserVitesse);
        }
        public function setLimitationVitesse(int $radarReglé){
            $this->_limitationVitesse=$radarReglé;
        }
        public function getLimitationVitesse(){
            return $this->_limitationVitesse;
        }
        //Function flash pour flasher les véhicules roulant trop vite
        public function flash($stockVitesse){
            if($stockVitesse<$this->_limitationVitesse){
                return $pv=0;
            }else if($stockVitesse<=$this->_limitationVitesse+10 and $stockVitesse>$this->_limitationVitesse){
                return $pv=1;
            }else if($stockVitesse<=$this->_limitationVitesse+20){
                return $pv=2;
            }else if($stockVitesse>=$this->_limitationVitesse+20){
                return $pv=3;
            }
        }

        const PV_35="1 pts en moins et 45€ d'amende.";
        const PV_90="3 pts en moins et 90€ d'amende.";
        const PV_GENDARME="rendez-vous à la gendarmerie.";

        public function créePv($i,$pv){
            if($pv==1){
                echo "\nLa voiture $i à été flashée\n";
                echo self::PV_35;
            }else if ($pv==2){
                echo "\nLa voiture $i à été flashée\n";
                echo self::PV_90;
            }else if($pv==3){
                echo "\nLa voiture $i à été flashée\n";
                echo self::PV_GENDARME;
            }
        }
        public function recupDonnesFlash($voiture){
            echo " \nMarque :". $voiture->getMarque() ."\nModèle :". $voiture->getModele() ."\nImmatriculation :" .$voiture->getImmat(). "\nCouleur :". $voiture->getCouleur();
        }
    }

?>