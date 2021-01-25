<?php
    class Amende{
        private $amende;
        private $pointPerdus;

    public function set_amende($amende){
        $this->_amende=$amende;
    }
    public function get_amende(){
        return $this->_amende;
    }
    public function set_pointPerdu($pointPerdus){
        $this->_pointPerdus=$pointPerdus;
    }
    public function get_pointPerdu(){
        return $this->_pointPerdus;
    }

    public function calculPv($limiteVitesse,$speed){
        if($speed<=$limiteVitesse){
            echo"Vous etes conforme a la vitesse max autorisé, quel pilote !";
        }
        elseif($speed>$limiteVitesse and $speed<=$limiteVitesse+10){
            $this->set_amende(45);
            $this->set_pointPerdu(1);
            echo"Vous avez de la chance, le PV ne contient que 45 euros d'amende et un retrait d'un point sur votre permis\n";
        }
        elseif($speed>$limiteVitesse and $speed<=$limiteVitesse+20){
            $this->set_amende(90);
            $this->set_pointPerdu(3);
            echo"Pas de bol,le PV contient 90 euros d'amende et un retrait de 3 points sur votre permis\n";
        }
        else{
            echo"Une petite visite a la gendarmerie s'impose !!\n";
        }
    }
    }
?>