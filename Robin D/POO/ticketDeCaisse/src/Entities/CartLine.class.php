<?php
    class CartLine {
        private $_article;
        private $_quantity;

        public function get_article(){
            return $this->_article;
        }
    
        public function set_article($article){
            $this->_article = $article;
        }
    
        public function get_quantity(){
            return $this->_quantity;
        }
    
        public function set_quantity($quantity){
            $this->_quantity = $quantity;
        }

        public function __construct($article,$quantity) {
            $this->set_article($article);
            $this->set_quantity($quantity);
        }
    }
?>