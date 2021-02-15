<?php
    class Rooms {
        // LL Attributs
        private $_roomNumber;
        private $_surfaceArea;
        private $_price;
        private $_options;
        private $_type;
        private $_typeView;
        private $_capacity;

        // Constructeur


        // Méthodes

        


        // LL getter setter
        public function get_roomNumber(){
            return $this->_roomNumber;
        }
        public function set_roomNumber($_roomNumber){
            $this->_roomNumber = $_roomNumber;
        }
        public function get_surfaceArea(){
            return $this->_surfaceArea;
        }
        public function set_surfaceArea($_surfaceArea){
            $this->_surfaceArea = $_surfaceArea;
        }
        public function get_price(){
            return $this->_price;
        }
        public function set_price($_price){
            $this->_price = $_price;
        }
        public function get_options(){
            return $this->_options;
        }
        public function set_options($_options){
            $this->options = $_options;
        }
        public function get_type(){
            return $this->_type;
        }
        public function set_type($_type){
            $this->_type = $_type;
        }
        public function get_typeView(){
            return $this->_typeView;
        }
        public function set_typeView($_typeView){
            $this->_typeView = $_typeView;
        }
        public function get_capacity(){
            return $this->_capacity;
        }
        public function set_capacity($_capacity){
            $this->_capacity = $_capacity;
        }



    }

?>