<?php
class Reservation{
	
	//SV
    private $Client;         //objet Client dans Objet Reservation
	private $listeChambres;  //table avec nb de chambres réservées par client
	private $dateArrivee;  
	private $dateDepart;
	private $nbAdulte;
	private $nbEnfant;
	private $prix;
	private $numResa;

	public function __construct($Client,$listeChambres,$dateArrivee,$dateDepart,$nbAdulte,$nbEnfant,$prix,$numResa){
		$this ->Client=$Client;
		$this ->listeChambres=$listeChambres;   // a modifier
		$this ->dateArrivee=$dateArrivee;
		$this ->dateDepart=$dateDepart;
		$this ->nbAdulte=$nbAdulte;
		$this ->nbEnfant=$nbEnfant;
		$this ->numResa=$numResa;
		$this ->prix=$prix;       // a ajouter
	   
	}

	public function getClient(){
		return $this->Client;
	}

	public function setClient($Client){
		$this->Client = $Client;
	}

	public function getListeChambres(){
		return $this->listeChambres;
	}

	public function setListeChambres($listeChambres){
		$this->listeChambres = $listeChambres;
	}

	public function getDateArrivee(){
		return $this->dateArrivee;
	}

	public function setDateArrivee($dateArrivee){
		$this->dateArrivee = $dateArrivee;
	}

	public function getDateDepart(){
		return $this->dateDepart;
	}

	public function setDateDepart($dateDepart){
		$this->dateDepart = $dateDepart;
	}

	public function getNbAdulte(){
		return $this->nbAdulte;
	}

	public function setNbAdulte($nbAdulte){
		$this->nbAdulte = $nbAdulte;
	}

	public function getNbEnfant(){
		return $this->nbEnfant;
	}

	public function setNbEnfant($nbEnfant){
		$this->nbEnfant = $nbEnfant;
	}

	public function getPrix(){
		return $this->prix;
	}

	public function setPrix($prix){
		$this->prix = $prix;
	}

	public function getNumResa(){
		return $this->numResa;
	}

	public function setNumResa($numResa){
		$this->numResa = $numResa;
	}
	
	//SV
	//méthode pour sauvegarder la réservation dans table reservations.txt
	public function saveReservation (string $fileResa, string $mode){
			$saveResa=fopen($fileResa, $mode);    //SV $fileResa=reservations.txt &$mode="a"  SV
			if ($saveResa!=false)
			{
				return $saveResa;
			}
	}
	
	//méthode pour visualiser réservation(s) dans table reservations.txt
	public function seeReservation (string $fileResa, string $mode){
		$voirEtat=fopen($fileResa, $mode);          //SV idem : $fileResa=reservations.txt &$mode="a"  SV
		if ($voirEtat!=false)
		{
			return $voirEtat;
		}
	}
}	

// //SV
// //*in index
// //to save resa in array reservation.txt
// $saveResa=fopen("reservations.txt", "a"); 
// //to get list of booked rooms in array reservations.txt

// $manip=fopen("reservations.txt","r");
// //to get list of available rooms
// $manip=fopen("freeRooms.txt","r");


// $voirEtat=fopen("reservations.txt","r");*/


?>