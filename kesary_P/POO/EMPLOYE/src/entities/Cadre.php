<?php

class Cadre extends Employe{
    private $_listeEmploye = [];


    public function __construct($nom,$prenom,$numSecu,$salaire,$job){
        Parent::__construct($nom,$prenom,$numSecu,$salaire,$job); 
    }
    //Getters
    public function get_listeEmploye(){
        return $this->_listeEmploye;
    }
    //Setters
    public function set_listeEmploye($listeEmploye){
        $this->_listeEmploye = $listeEmploye;
    }

    //Les méthodes
    public function manager(array $listeEmploye){ 
        foreach ($listeEmploye as  $employe) {
            $this->_listeEmploye[] = $employe;
            $tabEmploye = $employe->get_nom() ." ". $employe->get_prenom();
            echo "Monsieur ". $this->get_nom() ." ". $this->get_prenom(). " est le manager de ". $tabEmploye ." \n";
        }
        
    }

    public function augmenteUnsalarie(Employe $employe, $pourcentage){ 
      $employe->set_salaire($employe->_salaire*(1+($pourcentage/100))); 
      echo "L'employé ". $employe->_nom . " ".$employe->_prenom. " a obtenu une augmentation de ". $pourcentage. " %. Son salaire est de :". $employe->_salaire . "€ \n"; 
    }

    public function toString(){
        echo "Nom : ". $this->_nom. "\n";
        echo "Prenom : ". $this->_prenom . " \n";
        echo "N° de Sécurité social : ". $this->_numSecu. "\n";
        echo "Salaire : ". $this->_salaire. "€\n";
        echo "Fonction : ". $this->_job . "\n";
        echo "Status : Cadre \n";
    }
}

?>