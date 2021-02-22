<?php
class Client
{
    private $_nom;
    private $_prenom;
    private $_compte;
    private $_livret;

    public function getNom(){
		return $this->_nom;
	}

	public function setNom($nom){
		$this->_nom = $nom;
	}

	public function getPrenom(){
		return $this->_prenom;
	}

	public function setPrenom($prenom){
		$this->_prenom = $prenom;
	}

	public function getCompte(){
		return $this->_compte;
	}

	public function setCompte($compte){
		$this->_compte = $compte;
	}

	public function getLivret(){
		return $this->_livret;
	}

	public function setLivret($livret){
		$this->_livret = $livret;
	}

    public function toString(){
        return $this->afficher();
    }

    public function __construct() {
        $this->_nom="Dupont";
        $this->_prenom="Paul";
        $this->_compte= new Compte("50236R");
        $this->_livret=new Livret ("45789L");
        
    }

    //donne info sur client
    public function afficher(){
        echo "Le client ".$this->getNom()." ".$this->getPrenom()." a ".$this->getCompte()->getMontant()." sur son compte ".$compte->getNumCompte()." et ".$livret->getSoldeLivret()." sur son livret ".$livret->getNumLivret()."\n";
    }

    //crédite son compte quand il reçoit de l'argent
    public function recevoir(){
        echo $this->crediter(50);
        echo "Le client ".$this->getNom()." ".$this->getPrenom()." a ".$this->getCompte()->getMontant()." sur son compte ".$this->getNumCompte()." et ".$livret->getSoldeLivret()." sur son livret ".$livret->getNumLivret()."\n";
    }
    
    //débite son compte quand il dépense de l'argent
    public function depenser(){
        $this->debiter(10);
        echo "Le client ".$this->getNom()." ".$this->getPrenom()." a ".$this->getCompte->getMontant()." sur son compte ".$compte->getNumCompte()." et ".$livret->getSoldeLivret()." sur son livret ".$livret->getNumLivret()."\n";
    }

    //débite le compte et crédite le livret
    public function epargner(){
        $this->debiter(100);
        $livret->setSoldeLivret($livret->_soldeLivret+$compte->getSomme(100));
        echo "Le client ".$this->getNom()." ".$this->getPrenom()." a ".$compte->getMontant()." sur son compte ".$compte->getNumCompte()." et ".$livret->getSoldeLivret()." sur son livret ".$livret->getNumLivret()."\n";
    }

          
     
}




?>