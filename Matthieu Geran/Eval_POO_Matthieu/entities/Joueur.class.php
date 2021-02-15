<?php

    class Joueur{

        private $_vie;
        private $_score;

        public function __construct(){ //Le joueur début avec 50 points de vie et un score de 0
            $this->_vie = 50;
            $this->_score = 0;
        }

        public function setVie($vie){
            $this->_vie = $vie;
        }

        public function getVie(){
            return $this->_vie;
        }

        public function setScore($score){
            $this->_score = $score;
        }

        public function getScore(){
            return $this->_score;
        }

        public function estVivant(){ //Fonction qui retourne true si le joueur est vivant et false s'il est mort
            if ($this->_vie <= 0){
                return false;
            } else {
                return true;
            }
        }

        public function attaque($ennemi,$scorePotentiel,$mode){ //Le joueur attaque le monstre

            $lanceHeros = De::lanceLeDe(); //On appelle la fonction du lancé de dé de la classe De
            $lanceMonstre = De::lanceLeDe();

            if ($mode == 1){
                echo "[Lancé du héros : " . $lanceHeros . " - Lancé du monstre : " . $lanceMonstre . "]\n";
            }

            if ($lanceHeros >= $lanceMonstre){ //Si le lancé du héros est supérieur ou égale à celui du monstre, celui-ci meurt
                $ennemi->setVivant(false);

                if ($mode == 1){
                    echo "Le monstre est vaincu !\n";
                }

                $this->setScore($this->getScore() + $scorePotentiel); //On incrémente le score
                return true;
            } else{
                return false; //La fonction retourne false si le joueur n'a pas tué le monstre
            }

        }

        public function subitDegats(int $degats,$mode){ //Fonction enlevant au joueur les points de vie selon les dégâts du monstre
            $this->setVie($this->getVie() - $degats);

            if ($mode == 1){
                echo "Le héros perd " . $degats . " points de vie, il lui en reste " . $this->getVie() . ".\n";
            }
        }

        public function protection($mode){ //Le joueur peut bloquer les attaques des monstres s'il fait 1 ou 2 avec son lancé de dé

            $lanceBouclier = De::lanceLeDe();
            if ($mode == 1){
                echo "[Lancé bouclier : " . $lanceBouclier;
            }
            
            if ($lanceBouclier <= 2){
                if ($mode == 1){
                    echo "] - Blocage réussi !\n";
                }
                return true;
            } else {
                if ($mode == 1){
                    echo "] - Blocage raté !\n";
                }
                return false; //Retourne false si le joueur rate son blocage
            }

        }

    }

?>