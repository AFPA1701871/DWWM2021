<?php
class Cadre extends Employe 
{
       private $listeEmploye;


       //construct not needed here
       /*public function __construct($nom,$prenom,$numSecu,$salaire,$job){
       Parent::__construct($this->nom,$this->prenom,$this->numSecu,$this->salaire,$this->job);
       }*/
       
       /*public function get_listeEmploye(){
           return $this->listeEmploye=[$this->set_nom,$this->set_prenom,$this->set_salaire,$this->set_job];
       }*/
       /*public function set_listeEmploye($listeEmploye){
           $this->_listeEmploye=$listeEmploye;
           $listeEmployeTab=$this->listeEmploye=[$this->set_nom,$this->set_prenom,$this->set_salaire,$this->set_job."\n"];
           echo "voici la liste des employés :".$this->listeEmploye=$this->set_nom,$this->set_prenom,$this->set_salaire,$this->set_job."\n".$employe->set_nom,$employe->set_prenom,$employe->set_salaire,$employethis->set_job.;
           echo $listeEmployeTab=explode(",",$listeEmploye);

       }*/
       public function manage(Employe $employe1, Employe $employe2){
           echo $this->set_nom." manage ".$employe1->set_nom." et ".$employe2->set_nom; 
       }
       public function augmenteUnSalarie(Employe $employe1,Employe $employe2){
           echo $this->set_nom." augmente ".$employe1->set_nom." ".$employe1->set_prenom." de 10%, donc son salaire est maintenant de ".$employe1->set_salaire*1.10." euros\n";
           echo $this->set_nom." augmente ".$employe2->set_nom." ".$employe2->set_prenom." de 20%, donc son salaire est maintenant de ".$employe2->set_salaire*1.20." euros";
       }
   } 
?>