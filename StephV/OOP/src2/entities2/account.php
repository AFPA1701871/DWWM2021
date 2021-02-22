<?php
class Account
{
    private $num;
    private $solde;

    public function __construct(string $num,float $solde){
        $this->_num=$num;
        $this->_solde=$solde;
    }

    public function getNum(){
		return $this->num;
	}

	public function setNum($num){
		$this->num = $num;
	}

	public function getSolde(){
		return $this->solde;
	}

	public function setSolde($solde){
		$this->solde = $solde;
	}


    public function displayAccount(){}

    public function withdraw(){}

    public function credit(){}

    public function transfert(){}
}
?>