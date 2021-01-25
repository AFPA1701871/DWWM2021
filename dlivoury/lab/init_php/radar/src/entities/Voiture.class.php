<?php

    class Voiture {
       private $_marque;
       private $_modele;
       private $_immatriculation;
       private $_couleur;
       private $speed=0;

    public function __construct($_marque,$_modele,$_immatriculation,$_couleur){
        $this->set_Marque($_marque);
        $this->set_Modele($_modele);
        $this->set_Immatriculation($_immatriculation);
        $this->set_Couleur($_couleur);
    }
       
    public function set_Marque($marque){
        $this->_marque=$marque;
    }
    public function get_Marque(){
        return $this->_marque;
    }
    public function set_Modele($modele){
        $this->_modele=$modele;
    }
    public function get_Modele(){
        return $this->_modele;
    }
    public function set_Immatriculation( $immatriculation){
        $this->_immatriculation=$immatriculation;
    }
    public function get_Immatriculation(){
        return $this->_immatriculation;
    }
    public function set_Couleur( $couleur){
        $this->_couleur=$couleur;
    }
    public function get_Couleur(){
        return $this->_couleur;
    }
    public function set_Speed($speed){
        $this->_speed=$speed;
    }
    public function get_Speed(){
        return $this->_speed;
    }
  
   
    public function vitesseVoiture(){
        echo"la $this->_marque $this->_modele de couleur $this->_couleur et immatriculée $this->_immatriculation roule a $this->_speed KM/H\n";
    }
    public function startVoiture($speed){
        $this->_speed+=$speed;
        echo"la $this->_marque $this->_modele de couleur $this->_couleur et immatriculée $this->_immatriculation  accelere et roule maintenant a $this->_speed KM/H\n";
    }
    }