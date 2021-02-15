<?php

    class Cadre extends Employe{
        //Attributs
        private $_listeEmployé;

        //Getters et setters
        public function getListeEmployé(){
            return $this->_listeEmployé;
        }
        public function setListeEmployé(Array $listeEmployé){
            $this->_listeEmployé = $listeEmployé;
        }

        //Constructeur
        public function __construct($nom,$prenom,$numSecu,$salaire,$job,$listeEmployé){
            parent::__construct($nom,$prenom,$numSecu,$salaire,$job);
            $this->setListeEmployé($listeEmployé);
        }

        public function manage($JN,$OD){
            echo "Je manage ". $JN->getNom(). " ". $JN->getPrenom(). " et ".$OD->getNom(). " ". $OD->getPrenom()."\n\n";
        }

        public function effectueSonJob(){
            echo "Je m'appelle ".$this->getPrenom()." ".$this->getNom().", mon numéro de sécu est ". $this->getNumSecu(). " et je suis ". $this->getJob(). ". Je suis le cadre et je manage" ."\n";
        }

        public function augmenteUnSalaire(Employe $employe,$pourcent){
            echo "Le salaire de ". $employe->getPrenom(). " est de ".$employe->getSalaire() ." €"."\n";
            $salaire=($employe->getSalaire())+($employe->getSalaire()/100)*$pourcent;
            $employe->setSalaire($salaire);
            echo "Le salaire de ". $employe->getPrenom(). " est maintenant de ".$employe->getSalaire() ." €. Je l'ai augmenté de $pourcent %"."\n\n";
        }
    }

?>