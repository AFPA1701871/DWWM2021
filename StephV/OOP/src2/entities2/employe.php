<?php
class Employe //mplements Job 
{
    protected $nom;
    protected $prenom;
    protected $numSecu;
    protected $salaire;
    protected $job;

    public function __construct(string $nom,string $prenom,int $numSecu,float $salaire,string $job){
        $this->set_nom=$nom;
        $this->set_prenom=$prenom;
        $this->set_numSecu=$numSecu;
        $this->set_salaire=$salaire;
        $this->set_job=$job;
    } 
   
    //this doesn't work as I need to set the values in the construct, then I need "set" in the construct itself
    /*public function __construct(string $nom,string $prenom,int $numSecu,float $salaire,string $job){
        $this->_nom=$nom;
        $this->_prenom=$prenom;
        $this->_numSecu=$numSecu;       
        $this->_salaire=$salaire;
        $this->_job=$job;
    } */  
        

    public function get_nom(){
        return $this->nom;
    }
    public function get_prenom(){
        return $this->prenom;
    }
    public function get_numSecu(){
        return $this->numSecu;
    }
    public function get_salaire(){
        return $this->salaire;
    }
    public function get_job(){
        return $this->job;
    }


    public function set_nom($nom){
        $this->nom=$nom;
    } 

    public function set_prenom($prenom){
        $this->prenom=$prenom;
    }

    public function set_numSecu($numSecu){
        $this->numSecu=$numSecu;
    }

    public function set_salaire($salaire){
        $this->salaire=$salaire;
    }

    public function set_job($job){
        $this->job=$job;
    }

    /*public function __toString(){
        echo "Voici l'employé";
    } */            
       
    public function effectueSonJob(){
        echo $this->set_nom. " ".$this->set_prenom." est ".$this->set_job." Son num de secu est le ".$this->set_numSecu." Il gagne ".$this->set_salaire;
    }
    /*public function expliqueSonJob(Employe $job){
        echo "";
    }*/
    
} 


?>