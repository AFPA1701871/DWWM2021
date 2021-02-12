<?php
    class Employe{
        protected $_firstName;
        protected $_lastName;
        protected $_socialSecurityNumber;
        protected $_salary;
        protected $_job;

        public function __construct(string $firstName,string $lastName,int $socialNumber,float $salary,string $job){
            $this->set_firstName($firstName);
            $this->set_lastName($lastName);
            $this->set_socialNumber($socialNumber);
            $this->set_salary($salary);
            $this->set_job($job);
        }

        public function get_firstName(){
            return $this->_firstName;            
        }

        public function set_firstName($firstName){
            $this->_firstName = $firstName;
        }

        public function get_lastName(){
            return $this->_lastName;            
        }

        public function set_lastName($lastName){
            $this->_lastName = $lastName;
        }

        public function get_socialNumber(){
            return $this->_socialSecurityNumber;            
        }

        public function set_socialNumber($socialNumber){
            $this->_socialSecurityNumber = $socialNumber;
        }

        public function get_salary(){
            return $this->_salary;            
        }

        public function set_salary($salary){
            $this->_salary = $salary;
        }

        public function get_job(){
            return $this->_job;            
        }

        public function set_job($job){
            $this->_job = $job;
        }

        function presentation(){
            echo "Bonjour, je suis ".$this->_firstName." ".$this->_lastName." mon numéro de sécu est : ".$this->_socialSecurityNumber." mon salaire est de : ".$this->_salary." et je travail en tant que ".$this->_job.".\n\n";
        }
    }
?>