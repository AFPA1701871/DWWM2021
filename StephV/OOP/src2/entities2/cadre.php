<?php
class Cadre extends Employe 
{
       private $_listeEmploye;
       
       public function __construct($nom,$prenom,$numSecu,$salaire,$job){
       Parent::__construct($nom,$prenom,$numSecu,$salaire,$job);
       $this->_listeEmploye=[];
       }
       
       public function getListeEmploye(){
           return $this->_listeEmploye;
       }
       public function setListeEmploye(array $listeEmploye){
           $this->_listeEmploye=$listeEmploye;
        }
        public function addEmploye(Employe $employe){    //to add an employee
            array_push($this->_listeEmploye,$employe);
        }
        public function removeEmploye(Employe $employe){    //to remove an employe
            array_pop($this->_listeEmploye,$employe);
        }

       public function manage(Employe $employe1, Employe $employe2){
           echo $this->getNom()." manage ".$employe1->getNom()." et ".$employe2->getNom(); 
       }

       public function augmenteUnSalarie(Employe $employe1,Employe $employe2){
        echo $this->getNom()." augmente ".$employe1->getNom()." ".$employe1->getPrenom()." de 10%, donc son salaire est maintenant de ".$employe1->getSalaire()*1.10." euros\n";
        echo $this->getNom()." augmente ".$employe2->getNom()." ".$employe2->getPrenom()." de 20%, donc son salaire est maintenant de ".$employe2->getSalaire()*1.20." euros";
    }
}
?>