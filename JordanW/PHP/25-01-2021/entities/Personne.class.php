<?php 

    class Personne{
        
        private $_nom;
        private  $_prenom;

        private static $_tabVoiture=[];

        public function __construct(string $nom,int $prenom){
           
            $this-> setNom($nom);
            $this-> setPrenom($prenom);
            //self::$_tabVoiture[]=$immatriculation;
        }
        
        public static function testImmatriculation(string $immatriculation){
            if(in_array($immatriculation,self::$_tabVoiture)){
                echo "Immatriculation existe déjà !!";
                return true;
            }
            return false;
        }

        private function setNom(string $nom){
            $this-> _nom=$nom;
        }
        private function setprenom(string $prenom){
            $this-> _prenom=$prenom;
        }
    }
?>