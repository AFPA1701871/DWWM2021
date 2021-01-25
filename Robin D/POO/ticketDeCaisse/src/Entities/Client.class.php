<?php
    class Client {
        private $_firstName;
        private $_lastName;


        public function set_FirstName($firstName) {
            $this->_firstName=$name;
        }

        public function set_LastName($lastName) {
            $this->_lastName=$lastName;
        }

        public function __construct($firstName, $lastName) {
            $this->set_FirstName($firstName);
            $this->set_LastName($lastName);
        }
    }
?>