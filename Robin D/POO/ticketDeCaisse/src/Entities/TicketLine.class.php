<?php
    class TicketLine {
        private $_productName;
        private $_quantity;
        private $_unitPrice;
        private $_totalPrice;

        public function set_productName($productName) {
            $this->_productName=$productName;
        }

        public function set_quantity($quantity) {
            $this->_quantity=$quantity;
        }

        public function set_unitPrice($unitPrice) {
            $this->_unitPrice=$unitPrice;
        }

        public function set_totalPrice($totalPrice) {
            $this->_totalPrice=$totalPrice;
        }

        public function calculate_totalPrice($quantity,$unitPrice) {
            $this->_totalPrice=$quantity*$unitPrice;
        }

        public function __construct($productName,$quantity,$unitPrice) {
            $this->set_productName($productName);
            $this->set_quantity($quantity);
            $this->set_unitPrice($unitPrice);
            $this->calculate_totalPrice($quantity,$unitPrice);
        }
    }
?>