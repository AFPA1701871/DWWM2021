<?php

  class Employe{
    protected $_nom;
    protected $_prenom;
    protected $_numSecu;
    protected $_salaire;
    protected $_job;

    public function __construct($nom,$prenom,$numSecu,$salaire,$job){
        $this->set_nom($nom);
        $this->set_prenom($prenom);
        $this->set_numSecu($numSecu);
        $this->set_salaire($salaire);
        $this->set_job($job);
    }

    //Getters
    public function get_nom(){
        return $this->_nom;
    }
    public function get_prenom(){
        return $this->_prenom;
    }
    public function get_numSecu(){
        return $this->_numSecu;
    }
    public function get_salaire(){
        return $this->salaire;
    }
    public function get_job(){
        return $this->_job;
    }

    //Setters
    public function set_nom($nom){
        $this->_nom = $nom;
    }
    public function set_prenom($prenom){
        $this->_prenom = $prenom;
    }
    public function set_numSecu($numSecu){
        $this->_numSecu = $numSecu;
    }
    
    public function set_salaire($salaire){
        $this->_salaire = $salaire;
    }
    public function set_job($job){
        $this->_job = $job;
    }

    public function toString(){
        echo "Nom : ". $this->_nom. "\n";
        echo "Prenom : ". $this->_prenom . " \n";
        echo "N° de Sécurité social : ". $this->_numSecu. "\n";
        echo "Salaire : ". $this->_salaire. "€\n";
        echo "Fonction : ". $this->_job . "\n";
    }
    public function effectueSonJob(){
        if ($this->_job == "Soudeur") {
           echo "Je suis soudeur sur une ligne de production depuis 10 ans. \n";
           echo "C'est une technique qui consiste à assembler des éléments métalliques \n";
        }elseif ($this->_job == "Assistant mécanicien") {
            echo "J'interviens depuis 3 ans sur la maintenance de pièces automobiles en collaboration avec le technicien de maintenance automobile.\n";
            echo "Je diagnostique les pannes et effectue les réparations. \n";
        }elseif ($this->_job == "Magasinière") {
            echo "Je receptionne, stocke et prépare les produits destinés à être livrés à un client donné depuis de 2 ans. \n";
            echo "Je fais également le suivi et l'inventaire des stocks.";
        }   
    }
}

?>


