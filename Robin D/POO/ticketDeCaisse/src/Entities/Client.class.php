<?php
    class Client {
        private $_firstName;
        private $_lastName;


        public function set_firstName($firstName) {
            $this->_firstName=$firstName;
        }

        public function set_lastName($lastName) {
            $this->_lastName=$lastName;
        }

        public function __construct($firstName, $lastName) {
            $this->set_firstName($firstName);
            $this->set_lastName($lastName);
        }
    }
?>