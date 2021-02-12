<?php 

    class Banque {
            private string $_nom;
            
            public function __construct(string $nom){
                $this->setNom($nom);
            }
            
            public function setNom(string $nom){
                $this->_nom=$nom;
            }
            public function getNom(){
                $this->_nom;
            }

    }

?>  