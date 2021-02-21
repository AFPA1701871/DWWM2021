<?php

    class Joueur{

        private $_pointVie;
        private $_de;
        private $_nbMonstreFacileTue;
        private $_nbMonstreDifficileTue;

        public function __construct(){
            $this->_pointVie=50;
            $this->_de=new De();
            $this->_nbMonstreFacileTue=0;
            $this->_nbMonstreDifficileTue=0;
        }

        public function getNbMonstreFacileTue(){
            return $this->_nbMonstreFacileTue;
        }

        public function getNbMonstreDifficileTue(){
            return $this->_nbMonstreDifficileTue;
        }


        public function getPointDeVie(){
            return $this->_pointVie;  
        }

        public function getDe(){
            return $this->_de;
        }

        /**
         * permet de verifier si le joueur est encore vivant
         */
        public function estVivant(){
            if($this->_pointVie>0){
                return true;
            }else{
                return false;
            }
        }

        /**
         * permet au joueur d'attaquer un monstre
         * methode basé sur un lancé de dé pour les 2 combattants
         * vesoin en arguments d'un monstre.
         */
        public function attaque(MonstreFacile $monstre, int $withTrace){
            if($withTrace==1){
                echo "mon joueur attaque.....\n";
            }
            if($this->_de->lancerLeDe()>=$monstre->getDe()->lancerLeDe()){
                if($withTrace==1){
                    echo "le joueur à gagné\n";
                }
                $monstre->setEstVivant(!$monstre->getEstVivant());
                if($monstre->getIsMonsterFacile()){
                    $this->_nbMonstreFacileTue++;
                }else{
                    $this->_nbMonstreDifficileTue++;
                }
            }
            if($withTrace==1){
                echo "***************\n";
            }
        }

        /**
         * methode qui permet d'affiliger des dégats au joueur
         * argument dégat en int pour soustraire au point de vie du joueur
         */
        public function subitDegat(int $degat, int $withTrace ){
            if(!$this->bouclier($withTrace)){
                $this->_pointVie-=$degat;
            }
        }

        /**
         * methode qui lance le de du joueur et si < =2
         * alors les degats ne sont pas appliqués
         */
        public function bouclier(int $withTrace){
            if($this->_de->lancerLeDe()<=2){
                if($withTrace==1){
                    echo "heuresement notre héro a sorti son bouclier\n";
                }
                return true;
            }else{
                return false;
            }
        }

    }
?>