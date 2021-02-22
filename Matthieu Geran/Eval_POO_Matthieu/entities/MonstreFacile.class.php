<?php

    class MonstreFacile{

        private $_vivant;

        public function __construct(){
            $this->_vivant = true;
        }

        public function setVivant(bool $vivant){ //On définit si le monstre est vivant
            $this->_vivant = $vivant;
        }

        public function getVivant(){
            return $this->_vivant;
        }

        public function attaque($ennemi,$mode){ //Fonction qui permet au monstre d'attaquer le joueur
            if ($ennemi->protection($mode) == false){
                $ennemi->subitDegats(10,$mode); //N'enlève des dégâts au joueur seulement s'il ne bloque pas l'attaque
            }
        }

    }


?>