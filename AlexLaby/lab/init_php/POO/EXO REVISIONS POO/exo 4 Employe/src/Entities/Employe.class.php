<?php

    class Employe{

        //Attributs
        protected $_nom;
        protected $_prenom;
        protected $_numSecu;
        protected $_salaire;
        protected $_job;

        //Getters et setters
        public function getNom(){
            return $this->_nom;
        }
        public function setNom(String $nom){
            $this->_nom = $nom;
        }

        public function getPrenom(){
            return $this->_prenom;
        }
        public function setPrenom(String $prenom){
            $this->_prenom = $prenom;
        }
    
        public function getNumSecu(){
            return $this->_numSecu;
        }
        public function setNumSecu(String $numSecu){
            $this->_numSecu = $numSecu;
        }
    
        public function getSalaire(){
            return $this->_salaire;
        }
        public function setSalaire(Float $salaire){
            $this->_salaire = $salaire;
        }
    
        public function getJob(){
            return $this->_job;
        }
        public function setJob(String $job){
            $this->_job = $job;
        }

        //Constructeur
        public function __construct($nom,$prenom,$numSecu,$salaire,$job){
            $this->setNom($nom);
            $this->setPrenom($prenom);
            $this->setNumSecu($numSecu);
            $this->setSalaire($salaire);
            $this->setJob($job);
       }

       public function toString(){

       }
       public function tabChambresToString() {
        $string="";
        for ($i=0; $i < count($this->_chambre); $i++) { 
            $string.=$this->_chambre[$i]->get_roomNumber().",";
        }
        $string=substr($string,0,strrpos($string,","));
        return $string;
    }

       public function effectueSonJob(){
           echo "Je m'appelle ".$this->getPrenom()." ".$this->getNom().", mon numéro de sécu est ". $this->getNumSecu(). " et je suis ". $this->getJob() ."\n\n";
       }
    }

?>