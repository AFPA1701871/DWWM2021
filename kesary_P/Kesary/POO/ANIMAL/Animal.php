<?php
   abstract class Animal{
      protected $_couleur;
      protected $_poids;

      public function __construct(string $couleur, int $poids){
          $this -> set_couleur($couleur);
          $this -> set_couleur($poids);
      }

      public function get_couleur(){
          return $this -> _couleur;
      }

      public function get_poids(){
          return $this -> _poids;
      }

      public function set_couleur($_couleur){
          $this -> _couleur = $_couleur;
      }

      public function set_poids($_poids){
          $this -> _poids = $_poids;
      }

       abstract public function manger();  
       
      public function seDeplacer(){
          echo "je suis un animal migrateur";
      }
      /*
      final public function crier(){
        echo "moquerie";
    }*/

      
  }

?>
