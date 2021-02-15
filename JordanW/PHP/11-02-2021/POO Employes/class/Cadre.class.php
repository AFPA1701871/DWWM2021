<?php 

	class Cadre extends Employe {
    	public $_listeEmploye=[];

        public function __construct(string $nom,string $prenom,int $numSecu,float $salaire,string $job){
            Parent::__construct($nom,$prenom,$numSecu,$salaire,$job);
            $this->_enVie=true;
        }

        public function toString(){
            echo"nom : ".$this->_nom."\n";
            echo"prenom : ".$this->_prenom."\n";
            echo"num secu : ".$this->_numSecu."\n";
            echo"salaire : ".round($this->_salaire,2)."\n";
            echo"job : ".$this->_job."\n";
            $strEmploye="";
            foreach($this->_listeEmploye as $valeur){
                $strEmploye .=$valeur->get_Nom()." ".$valeur->get_Prenom() .",";
            }
            if(empty($strEmploye)){$strEmploye="Personne";}
            echo "je manage :".$strEmploye."\n";
            echo "--------------------------------------------\n";
        }

        public function manage(array $tabEmploye){
            foreach($tabEmploye as $valeur){
                $this->_listeEmploye[] = $valeur;
                $tab[]=$valeur->get_nom();
            } 
            echo $this->_nom." manage désormais : ".implode(",",$tab);
        }

        public function augmenteUnSalarie(Employe $employe,float $pourcentage){
            $employe->set_salaire($employe->_salaire*(1+($pourcentage/100)));
        }

    }

?>