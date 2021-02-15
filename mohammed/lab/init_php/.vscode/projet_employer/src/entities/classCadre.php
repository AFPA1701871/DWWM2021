<?php
    class cadre extends employer 
    {
       private $_status="je suis le cadre ";

        public function __construct($nom,$prenom,$numeroSS,$salaire,$job){
            parent :: __construct($nom,$prenom,$numeroSS,$salaire,$job);

        }
        //getteres
        public function get_nom(){
            return $this->_nom;
        }
        public function get_prenom(){
            return $this->_prenom;
        }
        public function get_numeroSS(){
            return $this->_numeroSS;
        }
        public function get_job(){
            return $this->_job;
        }
        public function get_salaire(){
            return $this->_salaire;
        }
       // setteres
       public function set_salaire($salaire){
          $this->_salaire=$salaire;
        }
        //methode
        public function chef_maintenance(){
            echo " le chef maintenance assure la coordination des equipes de maintenance ";
        }
        public function jemange(){
            echo " je suis le cadre et je mange hhhhhhh ";
        }
        public function augmentSalaire($salaire,$pourcent){
            $salaire=$salaire+(($salaire)*($pourcent/100));
            return $salaire ;
        }
        
    }
    


?>