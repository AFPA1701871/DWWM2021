<?php
class voiture
{
    private $_color ;
    private $_marque  ;
    private $_modele ;
    private $_immatricule ;
    private $_vitesse=0;

    //*********************/fonction choix de voiture /*********************/
    public function __construct($couleur,$modele,$marque,$immatricule){
        $this->_color=$couleur;
        $this->_modele=$modele;
        $this->_immatricule=$immatricule;
        $this->_marque=$marque;
       // $this->set_marque($marque)// on peut le faire comme ca avec la fonction set endesous
    }
public function set_couleur(string $couleur){
$this->_color = $couleur ;}
public function set_marque(string $marque){
    $this->_marque = $marque;}
public function set_modele(string $modele){
    $this->_modele =$modele ;}
public function set_immatricule(string $immatricule){
    $this->_immatricule =$immatricule ;}
    public function set_vitesse(){
        $this->_vitesse += rand(1,25) ;}
public function get_couleur(){
    return  $this->_color ;}
public function get_marque(){
   return  $this->_marque ;}
public function get_modele(){
    return  $this->_modele ;}
public function get_immatricule( ){
    return $this->_immatricule;}
    public function get_vitesse(){
    return  $this->_vitesse  ;}
    }
?>