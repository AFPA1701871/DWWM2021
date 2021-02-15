<?php
require ("implement.php");
abstract class personne
{
    private $_nom ;
    private $_age  ;
    private $_taille ;
    private $_poid ;
  
    

    //*********************/fonction choix de voiture /*********************/
    public function __construct($nom,$age,$taille,$poid){
        $this->_nom=$nom;
        $this->_age=$age;
        $this->_taille=$taille;
        $this->_poid=$poid;
        
       
        
       // $this->set_marque($marque)// on peut le faire comme ca avec la fonction set endesous
    }
public function set_nom($nom){
$this->_nom = $nom ;}
public function set_age($age){
    $this->_age = $age;}
public function set_taille(string $taille){
    $this->_taille =$taille ;}
public function set_poid(string $poid){
    $this->_poid =$poid ;}
    
public function get_nom(){
    return  $this->_nom ;}
public function get_age(){
   return  $this->_age ;}
public function get_taille(){
    return  $this->_taille ;}
public function get_poid( ){
    return $this->_poid;}
    //************************ methode ***************************///// */
    public function marcher(){
    $marcher = " je marche !!!!!!!!";
    return $marcher;}
    final public function travail(){
        $travail="je travail ";
        return $travail;
    }
     abstract public function sport();
        
}


 
        class eleve extends personne implements courir
    {
        private $_classe;
        private $_note;
        public function __construct($classe,$note,$nom,$age,$taille,$poid){
            Parent :: __construct($nom,$age,$taille,$poid);
               $this->_classe=$classe;
               $this->_note=$note;
            }
        public function reviser(){
                $reviser="je revise  ";
                return $reviser;
            }
            public function mesnotes(){
                $notes="voici mes notes 15;16;17  ";
                return $notes;
            }    
                 function sport(){
                    $soprt="je fait du sport ";
                    return $soprt;
                }
                public function courir(){
                    echo "je cour ";
                }
            }

    
 

    
    
?>