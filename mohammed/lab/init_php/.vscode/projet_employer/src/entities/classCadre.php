<?php
    class cadre extends employer 
    {
       private $_status;
       private $_liste;

        public function __construct($nom,$prenom,$numeroSS,$salaire,$job,$liste){
            parent :: __construct($nom,$prenom,$numeroSS,$salaire,$job);
            $this->_status="je suis le cadre ";
            $this->_liste=$liste;    
        }
        public function getListe(){
            return $this->_liste;
        }
        public function setListe($liste){   
           $this->_liste=$liste;
        }
        
        
        
        //methode
         public function addEmployer(employer $employer){
             array_push($this->_liste,$employer);
         }

        public function chef_maintenance(){
            echo " le chef maintenance assure la coordination des equipes de maintenance ";
        }
        public function jemanage(){
            echo " je suis le chef et je manage  ";
        }
        public function augmentSalaire(employer $salarier, float $pourcent){
            //foreach ($this->_liste as $key) {
                for ($i=0; $i <count($this->_liste) ; $i++) { 
            //  $tab=$this->_liste;
                    if ($this->_liste[$i]===$salarier) {
                        $this->_liste[$i]->set_salaire($this->_liste[$i]->get_salaire()+$this->_liste[$i]->get_salaire()*($pourcent/100));
                    }
               }
            
            }

        
    }
    


?>