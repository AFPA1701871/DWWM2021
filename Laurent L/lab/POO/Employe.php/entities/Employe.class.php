<?php

    class Employe{

        protected $_nom;
        protected $_prenom;
        protected $_numSecu;
        protected $_salaire;
        protected $_job;

        public function __construct($prenom,$nom,$numSecu,$salaire,$job){
            $this->set_prenom($prenom);
            $this->set_nom($nom);            
            $this->set_numSecu($numSecu);
            $this->set_salaire($salaire);
            $this->set_job($job);
        }

        //Methodes

        public function toString(Employe $salarié){
            echo "\n".$this->get_prenom()." ".$this->get_nom()." fait parti(e) des effectifs de notre société.\nSon N° de Sécurité Sociale est ".$this->get_numSecu().". \nSon salaire mensuel brut est de ".$this->get_salaire()." €. \nIl / Elle exerce le métier suivant : ".$this->get_job().".";
        }

        public function effectueSonJob(){
            $saFonction = $this->get_job();
            switch($saFonction){
                case "soudeur" :
                    echo "\n".$this->get_prenom()." ".$this->get_nom()." relie deux pieces en une seule en les fusionnant grace à un poste a souder.\n";
                    break;
                case "assistant mecanicien" :
                    echo "\n".$this->get_prenom()." ".$this->get_nom()." apporte son aide au mécanicien dans la réalisation de taches demandant moins d'experises.\n";
                    break;
                case "magasinière" :
                    echo "\n".$this->get_prenom()." ".$this->get_nom()." a en charge stock de l'entreprise, son approvisionnement, sa gestion, sa rotation, anticiper une eventuelle rupture d'une réference.\n";
                    break;
                case "cadre" :
                    echo "\n".$this->get_prenom()." ".$this->get_nom()." chappote une équipe de salariés avec pour objectif, accomplir les taches qui incombent à l'équipe ou au service.\n";
                    break;
                default :
                    echo "Oups";
            }
        }
        



        // get set
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