<?php 

    class Employe{
        protected $_nom;
        protected $_prenom;
        protected $_numSecu;
        protected $_salaire;
        protected $_job;

        public function __construct(string $nom,string $prenom,int $numSecu,float $salaire,string $job){
           $this->_nom=$nom;
           $this->_prenom=$prenom;
           $this->_numSecu=$numSecu;
           $this->_salaire=$salaire;
           $this->_job=$job;
           $this->toString();
        }
        
        public function toString(){
            echo"nom : ".$this->_nom."\n";
            echo"prenom : ".$this->_prenom."\n";
            echo"num secu : ".$this->_numSecu."\n";
            echo"salaire : ".round($this->_salaire,2)."\n";
            echo"job : ".$this->_job."\n";
            echo "--------------------------------------------\n";
        }

        public function effectueSonJob(){
            echo"";
         }

        public function get_nom(){
            return $this->_nom;
        }
        public function get_prenom(){
            return $this->_prenom;
        } 
        public function set_salaire($_salaire){
            $this->_salaire = $_salaire;
            echo "\nAprès aumgentation de salaire : \n\n";
            $this->toString();
        }
    }

?>