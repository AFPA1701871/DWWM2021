<?php
class Livret extends Compte
{
    private $_numLivret;
    private $_soldeLivret;
    
    public function getNumLivret(){
		return $this->_numLivret;
	}

	public function setNumLivret($numLivret){
		$this->_numLivret = $numLivret;
	}

    public function getSoldeLivret(){
		return $this->_soldeLivret;
	}

	public function setSoldeLivret($soldeLivret){
		$this->_soldeLivret = $soldeLivret;
	}


	public function __construct(){
        parent::__construct("50236R");
        $this->_numLivret="45789L";
        $this->_soldeLivret=1200;
    }

    public function interets(){
        echo "Le client ".$this->getNom()." ".$this->getPrenom()." a ".$this->getMontant()." sur son compte ".$this->getNumCompte()." et ".$this->getSoldeLivret()*1.05." sur son livret ".$this->getNumLivret()."\n";
    }

    


}



?>