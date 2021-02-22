<?php
class Compte
{
    private $_numCompte;
    private $_montant;
    private $_somme;

    public function getNumCompte(){
		return $this->_numCompte;
	}

	public function setNumCompte($numCompte){
		$this->_numCompte = $numCompte;
	}

	public function getMontant(){
		return $this->_montant;
	}

	public function setMontant($montant){
		$this->_montant = $montant;
	}

    public function getSomme(){
		return $this->_somme;
	}

	public function setSomme($somme){
		$this->_somme= $somme;
	}

	
    public function __construct($numCompte){
        $this->_numCompte="50236R";
        $this->_montant=120;
        $this->_somme;
    }

    //
	public function debiter($somme){			
		$this->setMontant($this->_montant-$this->setSomme());
		                        
		}

    public function crediter($somme){
		$this->setMontant($this->_montant+$this->setSommme());		
	}




}



?>