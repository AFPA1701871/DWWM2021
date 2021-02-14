<?php
class Room{
    //DL: J'intialise les attributs necessaires a la creation de l'objet chambre   
    private $_view;      
	private $_numRoom;
	private $_surface;
	private $_prix;
	private $_type;
	private $_capAdultes;
	private $_capEnfants;
	private $_options;
	
	
	public function __construct(int $_numRoom,string $_view,int $_surface,int $_prix,string $_type,int $_capAdultes,int $_capEnfants,string $_options){
		$this->setView($_view);
		$this->setNumRoom($_numRoom);
		$this->setSurface($_surface);
		$this->setPrix($_prix);
		$this->setType($_type);
		$this->setCapEnfants($_capEnfants);
		$this->setCapAdultes($_capAdultes);
		$this->setOptions($_options);


	}
    public function getView(){
		return $this->_view;
	}
	public function setView($_view){
		$this->_view = $_view;
	}
    public function getNumRoom(){
		return $this->_numRoom;
	}
	public function setNumRoom($_numRoom){
		$this->_numRoom = $_numRoom;
	}
	public function setSurface($_surface){
		$this->_surface=$_surface;
	}
	public function getSurface(){
		return $this->_surface;
	}
	public function setPrix($_prix){
		$this->_prix=$_prix;
	}
	public function getPrix(){
		return $this->_prix;
	}
	public function setType($_type){
		$this->_type=$_type;
	}
	public function getType(){
		return $this->_type;
	}
	public function setCapAdultes($_capAdultes){
		$this->_capAdultes=$_capAdultes;
	} 
	public function getCapAdultes(){
		return $this->_capAdultes;
	}
	public function setCapEnfants($_capEnfants){
		$this->_capEnfants=$_capEnfants;
	}
	public function getCapEnfants(){
		return $this->_capEnfants;
	}
	public function setOptions($_options){
		$this->_options=$_options;
	}
	public function getOptions(){
		return $this->_options;
	} 

	// public function constructListRoom($numRoom,$view,$price,$type){  //SV function showRoomList
	// 	$this->numRoom=setNumRoom($_numRoom);
	// 	$this->view=setView($_view);
	// 	$this->price=setPrice($_price);
	// 	$this->type=setType($_type);
		
	// 	//SV  loop
	// }
	

	}