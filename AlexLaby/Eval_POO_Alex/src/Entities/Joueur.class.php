<?php

    Class Joueur extends De{
        //Attributs
        private $_pointsDeVie;
        private $_pseudo;
        private $_score;
        //Pour compter le nombre de monstre facile et difficile tués
        private $_compteurMF;
        private $_compteurMD;
    
        //Getters et setters
        public function get_pointsDeVie(){
            return $this->_pointsDeVie;
        }  
        public function set_pointsDeVie(int $pointsDeVie){
            $this->_pointsDeVie = $pointsDeVie;
        }
    
        public function get_pseudo(){
            return $this->_pseudo;
        }
        public function set_pseudo(string $pseudo){
            $this->_pseudo = $pseudo;
        }

        public function get_score(){
            return $this->_score;
        }
        public function set_score($score){
            $this->_score = $score;
        }

        public function get_compteurMF(){
            return $this->_compteurMF;
        }
        public function set_compteurMF(int $compteurMF){
            $this->_compteurMF = $compteurMF;
        }
    
        public function get_compteurMD(){
            return $this->_compteurMD;
        }
        public function set_compteurMD(int $compteurMD){
            $this->_compteurMD = $compteurMD;
        }

        //Constructeur
        public function __construct($pseudo){
            $this->set_pseudo($pseudo);
            $this->_pointsDeVie=50;
            $this->_score=0;
            $this->_compteurMF=0;
            $this->_compteurMD=0;
        }

        //Méthodes :

        //Lancer la partie
        public function lancerPartie($joueur,$de){
            randomVS($joueur,$de);
        }

        //Permet de savoir si le héros est vivant ou mort
        public function estVivant($monstreFacile,$monstreDifficile){
            if($this->get_pointsDeVie()<=0){
                echo "Vous avez succombé, partie terminée \n";
                echo "Cela dit vous avez tué ". $this->get_compteurMF(). " " .$monstreFacile->get_nom(). " et ".$this->get_compteurMF(). " ". $monstreDifficile->get_nom() .". \n";
                echo "Vous avez un score de : ".$this->get_score(). " points. \n";
                echo "À bientôt ". $this->get_pseudo().".";
                exit;
            }
        }
        //Permet d'attaquer
        public function attaque($joueur,$monstre,$de){
            //Je sais où est mon erreur, les valeurs sont les mêmes. Pas eu le temps de finir
            if($joueur->lanceLeDe($de)>=$monstre->lanceLeDe($de)){
                echo $this->get_pseudo(). " attaque le ". $monstre->get_nom();
                $monstre->set_vivant(false);
            }
        }
        //Permet de faire subir des dégâts à notre héros
        public function subitDegats($joueur,$degatsSubit,$monstre){
            $joueur->set_pointsDeVie($joueur->get_pointsDeVie()-$degatsSubit);
            echo $joueur->get_pseudo(). " a subit l'attaque du ".$monstre->get_nom().". Il lui reste ".$joueur->get_pointsDeVie() ." points de vie. \n";
            return $joueur;
        }
    }

?>