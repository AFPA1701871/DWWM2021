<?php
class employer {
   protected $_nom;
   protected $_prenom;
   protected $_numeroSS;
   protected $_job;
   protected $_salaire;
        public function __construct($nom,$prenom,$numeroSS,$salaire,$job){
            $this->_nom=$nom;
            $this->_prenom=$prenom;
            $this->_numeroSS=$numeroSS;
            $this->_job=$job;
            $this->_salaire=$salaire;
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
        //setters
        public function set_salaire($salaire){
            $this->_salaire=$salaire;}
            public function set_nom($nom){
                 $this->_nom=$nom;
            }
         // methode
         public function job_soudeur(){
             echo " le soudeur fabrique des objet en les assemblant des pieces mettalique\n";
         }
         public function job_mécanicien(){
            echo " le mecanicen repare et maintien des machine mecanique moteur et autres\n";
        }
        public function job_magasinier(){
            echo " le magasinier assure la recepction la preparation et l'envoie des marchandise \n";
        }
        public function afichage(){
            echo "nom :". $this->_nom."\n";
            echo "prenom :".  $this->_prenom."\n";
            echo "numero de securute sociale :".$this->_numeroSS."\n";
            echo "job :".$this->_job."\n";
            echo "salaire :".$this->_salaire."\n";
        }
}

?>