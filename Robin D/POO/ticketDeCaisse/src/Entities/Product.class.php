<?php
    class Product {
        private $_wording;
        private $_description;
        private $_price;

        public function set_wording($wording) {
            $this->_wording=$wording;
        }

        public function set_description($description) {
            $this->_description=$description;
        }

        public function set_price($price) {
            $this->_price=$price;
        }

        public function __construct($wording,$description,$price) {
            $this->set_wording($wording);
            $this->set_description($description);
            $this->set_price($price);
        }

        public function get_wording() {
            return $this->_wording;
        }

        public function get_description() {
            return $this->_description;
        }

        public function get_price() {
            return $this->_price;
        }
    }
?>