<?php
class facture
{
          private $_nom;
          private $_produit;
          private $_prix;
          private $_total=0;
    function __construct($nom,$produit,$prix){
    $this->_nom=$nom ;
    $this->_produit=$produit;
    $this->_prix=$prix;}
///***************************setters**************** */
    public function set_nom(){
        $this->_nom = $nom ;}
        public function set_produit( ){
            $this->_produit = $produit;}
        public function set_prix( ){
            $this->_prix =$prix ;}
        public function set_total(){
            $this->_total =+$prix ;}
            //************ getteres******************* */
            public function get_nom(){
                return $this->_nom ;}
                public function get_produit(){
                    return   $this->_produit; }
                public function get_prix(){
                    return  $this->_prix  ;}
                public function get_total(){
                   return $this->_total  ;}
            
     
                
}