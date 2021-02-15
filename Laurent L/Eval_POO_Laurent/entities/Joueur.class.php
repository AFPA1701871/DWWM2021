<?php

    class Joueur {
        //Attribut
        private $_pointVie;
        private $_score;

        //Constructeur
        public function __construct($pointVie){
            $this->set_pointVie($pointVie);
            $this->_score=0;
        }

        //Méthodes

        public function estVivant(){
            if($this->get_pointVie()>0){
                $estVivant = true ;
            }else{
                $estVivant = false;
            }
            return $estVivant;
        }

        public function attaque(MonstreFacile $adversaire, $gain){
            $deJoueur = De::lanceLeDe();
            $adversaire = De::lanceLeDe();
            if ($deJoueur>=$adversaire){
                echo "Hero gagne";
                $this->scoreAugmente($gain);
                $adversaire->set_enVie(false);
            }
        }

        public function scoreAugmente($gain){
            $augmentationScore = $this->get_score()+$gain;
            $this->set_score($augmentationScore);

        }

        public function subitDegats(){
            $bouclier= De::lanceLeDe();
            if($bouclier>2){
                $pointVie = $this->get_pointVie()-10;
                $this->set_pointVie($pointVie);
            }
        }



        // get et set
        public function get_pointVie(){
            return $this->_pointVie;
        }

        public function set_pointVie($pointVie){
            $this->_pointVie = $pointVie;
        }

        public function get_score(){
            return $this->_score;
        }

        public function set_score($score){
            $this->_score = $score;
        }

    }

?>