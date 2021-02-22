<?php
    Class Employe{

        protected $_nom;
        protected $_prenom;
        protected $_numSecu;
        protected $_salaire;
        protected $_job;

        public function __construct($nom, $prenom, $numSecu, $salaire, $job){
            $this->set_nom($nom);
            $this->set_prenom($prenom);
            $this->set_numSecu($numSecu);
            $this->set_salaire($salaire);
            $this->set_job($job);
        }

        //Methodes
        //affichage de toutes les infos du salairié
        public function toString(){
            echo "\nNom : ".$this->_nom." Prenom : ".$this->_prenom."\nNuméro de Sécurité Solciale : ".$this->_numSecu."\nSalaire : ".$this->_salaire." €\nFonction : ".$this->_job."\n";
        }

        //affichage du type de métier réalisé par le salarié
        public function effectueSonJob(){
            $fonction = $this->_job;
            switch($fonction){
                case "soudeur" : echo $this->_nom." fait de la soudure.";break;
                case "assistant mécanicien" : echo $this->_nom." fait de la mécanique.";break;
                case "magasiniére" : echo $this->_nom." fait de la gestion de stock.";break;
                case "chef maintenance" : echo $this->_nom." fait de l'encadrement de l'équipe de maintenance.";break;
                default : echo "Une erreur s'est produite";
            }
        }

        // get et set
        public function get_nom(){
            return $this->_nom;
        }
        public function set_nom($nom){
            $this->_nom = $nom;
        }
        public function get_prenom(){
            return $this->_prenom;
        }
        public function set_prenom($prenom){
            $this->_prenom = $prenom;
        }
        public function get_numSecu(){
            return $this->_numSecu;
        }
        public function set_numSecu($numSecu){
            $this->_numSecu = $numSecu;
        }
        public function get_salaire(){
            return $this->_salaire;
        }
        public function set_salaire($salaire){
            $this->_salaire = $salaire;
        }
        public function get_job(){
            return $this->_job;
        }
        public function set_job($job){
            $this->_job = $job;
        }



    }


?>