<?php
class voiture
{
    private $_color ;
    private $_marque ;
    private $_modele ;
    private $_immatricule ;
    private $_vitesse=0;

    //*********************/fonction choix de voiture /*********************/

public function set_couleur(string $couleur){
$this->_color = $couleur ;}
public function set_marque(string $marque){
    $this->_marque = $marque;}
public function set_modele(string $modele){
    $this->_modele =$modele ;}
public function set_immatricule(string $immatricule){
    $this->_immatricule =$immatricule ;}
    public function set_vitesse($vitesse){
        $this->_vitesse = $vitesse ;}
public function get_couleur(){
    return  $this->_color ;}
public function get_marque(){
   return  $this->_marque ;}
public function get_modele(){
    return  $this->_modele ;}
public function get_immatricule( ){
    return $this->_immatricule;}
    public function get_vitesse(){
        $this->_vitesse  ;}
//********************** fonction vitesse et autre attrub *********** */
function vitesse(){
$vitesse = rand(1,25);
return $vitesse;}
}



?>