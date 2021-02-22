<?php

    class Employe{

        private $_nom;
        private $_prenom;
        private $_numSecu;
        private $_salaire;
        private $_job;

        public function __construct($nom,$prenom,$numSecu,$salaire,$job){
            $this->setNom($nom);
            $this->setPrenom($prenom);
            $this->setNumSecu($numSecu);
            $this->setSalaire($salaire);
            $this->setJob($job);
        }

        public function setNom(String $nom){
            $this->_nom = $nom;
        }

        public function setPrenom(String $prenom){
            $this->_prennom = $prenom;
        }

        public function setNumSecu(String $numSecu){
            $this->_numSecu = $numSecu;
        }

        public function setSalaire(Float $salaire){
            $this->_salaire = $salaire;
        }

        public function setJob(String $job){
            $this->_job = $job;
        }

        public function getNom(String $nom){
            return $this->_nom;
        }

        public function getPrenom(String $prenom){
            return $this->_prennom;
        }

        public function getNumSecu(String $numSecu){
            return $this->_numSecu;
        }

        public function getSalaire(Float $salaire){
            return $this->_salaire;
        }

        public function getJob(String $job){
            return $this->_job;
        }

    }

?>