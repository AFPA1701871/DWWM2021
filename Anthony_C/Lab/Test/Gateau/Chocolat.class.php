<?php
     class Chocolat extends Gateau{
        private $_ingredientPrincipal;

        public function __construct($ingredient,$moule,$ingredientPrincipal){
            gateau :: __construct($ingredient,$moule);
            $this->set_ingredientPrincipal($ingredientPrincipal);
        }
        
        public function get_ingredientPrincipal(){
            return $this->_ingredientPrincipal;
        }

        public function set_ingredientPrincipal($ingredientPrincipal){
            $this->_ingredientPrincipal = $ingredientPrincipal;
        }

        public function status(){
            Echo "Nous avons :".$this->_ingredientDeBase.",".$this->_moule.",".$this->_ingredientPrincipal.".\nNous avons tout ce qu'il faut pour faire un beau gateau au chocolat.";
        }
    }
?>