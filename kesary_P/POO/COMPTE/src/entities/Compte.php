<?php

class Compte{
    private $_numeroCompte;
    private  $_solde;

    //Constructeur
    public function __construct(string $numeroCompte){
        $this->_numeroCompte = $numeroCompte;
        $this->set_solde = 0;
    }

    //Getters
    public function get_numeroCompte(){
        return $this->_numeroCompte;
    }

    public function get_solde(){
        return $this->_solde;
    }

    //Setters
    public function set_numeroCompte($numeroCompte){
        $this->_numeroCompte = $numeroCompte;
    }

    public function set_solde($solde){
        $this->_solde=$solde;
    }

    //Les méthodes
    public function afficherInformationCompte(){
        echo "Voici les informations concernant le compte : \n";
        echo "Le compte : ". $this->get_numeroCompte(). "\n";
        echo "Le solde : ".$this->get_solde(). " €\n"; 
    }


    public  function retrait($montantRetrait){
        if($this->_solde <= 0 || $this->_solde > $montantRetrait){
            echo "Retrait impossible \n";
        }else {
            $this->set_solde($this->_solde - $montantRetrait);
            echo "Vous venez d'effectuer un retrait de ". $montantRetrait . "€ \n";
            echo "Votre solde s'élève à : ". $this->get_solde(). "€\n";
        }

    }

    public function versement($montantVersement){
        $this->set_solde($this->set_solde + $montantVersement);
        echo "Votre versement a bien été pris en compte \n";
        echo "Votre nouveau solde est de : ". $this->get_solde();
    }
    public function virement($virement, Compte $numeroCompte){
        $this->retrait($virement);
        for($i = 1 ; $i<3 ; $i++){
            $client = "client$i";
            for($j = 0 ; $j<count($$client->get_compteBancaire());$j++){
                if($numeroCompte == $$client->get_compteBancaire()[$j]->get_numeroCompte()){
                    $numeroCompte->set_solde($numeroCompte->get_numeroCompte()+$montant);
                }
            }

        }
        
    }

    }
    




?>