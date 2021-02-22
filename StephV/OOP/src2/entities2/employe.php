<?php
class Employe  
{
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
    } 
   
    public function getNom(){
        return $this->_nom;
    }
    public function getPrenom(){
        return $this->_prenom;
    }
    public function getNumSecu(){
        return $this->_numSecu;
    }
    public function getSalaire(){
        return $this->_salaire;
    }
    public function getJob(){
        return $this->_job;
    }


    public function setNom($nom){
        $this->_nom;
    } 

    public function setPrenom($prenom){
        $this->_prenom;
    }

    public function setNumSecu($numSecu){
        $this->_numSecu;
    }

    public function setSalaire($salaire){
        $this->_salaire;
    }

    public function setJob($job){
        $this->_job;
    }

    /*public function __toString(){
        return "";
    } */            
       
    
    public function effectueSonJob(){
        echo $this->getNom(). " ".$this->getPrenom()." est ".$this->getJob()." Son num de secu est le ".$this->getNumSecu()." Il gagne ".$this->getSalaire();
    }
    
        
} 


?>