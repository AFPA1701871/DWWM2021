<?php

class Client{
    private $_identifiant;
    private $_compteBancaire;

    //Constructeur
    public function __construct(string $identifiant, array $compteBancaire){
        $this->_identifiant = $identifiant;
        $this->_compteBancaire = $compteBancaire;
    }

    //Getters
    public function get_identifiant(){
        return $this->_identifiant;
    }

    public function get_compteBancaire(){
        return $this->_compteBancaire;
    }

    //Setters
    public function set_identifiant($identifiant){
        $this->_identifiant = $identifiant;
    }

    public function set_compteBancaire($compteBancaire){
        $this->_compteBancaire = $compteBancaire;
    }

    //Les méthodes
    public function afficherSesInfos(){
        $compteur = 0;
        echo "Voici les informations concernant son compte : \n";
        for($i=0; $i<count($this->_compteBancaire);$i++){
            $compteur++;
            echo "Le compte N° ".$compteur. " de ".$this->get_identifiant(). " de ". $this->_compteBancaire[$i]->get_numeroCompte(). "\n";
        }    
    }
    public function choixDuCompte(){
        $choixDuCompte = readline("Quel compte : 1-LDD ou 2-Livret : ");       
        for ($i=0; $i < count($this->_compteBancaire); $i++) { 
          if ($choixDuCompte == $this->_compteBancaire[$i]->get_numeroCompte()) {
               return $i;   
            }
        }
 
    }
}



?>