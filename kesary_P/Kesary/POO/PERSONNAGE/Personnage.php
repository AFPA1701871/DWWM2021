<?php
class Personnage{

    public $vie = 80;
    public $atk = 20;
    public $nom;

    public function __construct($nom){
        $this ->nom = $nom;
    }

    public function mort(){
        return $this ->vie <= 0;
    }

    public function attaque($cible){

        //Attaquant $this
        //Defenseur $cible
        //Prendre la vie du defenseur ==> defenseur.vie -= attaquant.atk
       $cible->vie -= $this-> atk; 


    }

    public function crier(){
        echo "Leroy Jenkins";
    }

    public function regenerer($vie = null){
        if (is_null($vie)) {
            $this -> vie = 100;
        }else{
            $this->vie +=  $vie;
        }
        
    }

}
?>