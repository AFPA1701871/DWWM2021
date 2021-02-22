<?php

    class Client{
        private $_identifiant;
        private $_compteBancaire;

        public function __construct(string $identifiant, array $compte){
            $this->set_identifiant($identifiant);
            $this->set_compteBancaire($compte);
        }

        // Méthodes

        //affiche l'integralité des numéros de comptes détenus par un client

        public function afficherSesInfos(){
            echo "\nLes comptes de ".$this->get_identifiant()." sont les suivants : ";
            $compte = "";
            foreach ($this->_compteBancaire as $element){
                $compte .= $element->get_numeroCompte().", ";
            }
            echo substr($compte,0,-2);
            
        }

        //renvoie l'index du n° de compte que l'on choisit dans la liste de compte du client     
        //pour connaitre les n° de comptes dispo pour le client, il faudra afficher ses infos préalablement.       

        public function choixCompte(){
            do{
                $choixCompte =  readline("Quel compte choisissez-vous ? ");  
                $compteOK = false;  
                for($i = 0; $i<count($this->_compteBancaire);$i++){
                    if($choixCompte == $this->_compteBancaire[$i]->get_numeroCompte()){
                        $compteOK = true;
                        return $i;
                    } 
                }
            } while(!$compteOK);
            
            
        }





        // get et set

        public function get_identifiant(){
            return $this->_identifiant;
        }

        public function set_identifiant($identifiant){
            $this->_identifiant = $identifiant;
        }

        public function get_compteBancaire(){
            return $this->_compteBancaire;
        }

        public function set_compteBancaire($compteBancaire){
            $this->_compteBancaire = $compteBancaire;
        }




    }



?>