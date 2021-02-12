<?php
    class Employe{
        private $firstName;
        private $lastName;
        private $socialSecurityNumber;
        private $salary;
        private $job;

        public function __construct($firstName,$lastName,$socialNumber,$salary,$job){
            $this->set_firstName();
            $this->set_lastName();
            $this->set_socialNumber();
            $this->set_salary();
            $this->set_job();
        }

        public function get_firstName(){
            return $this->$firstName;            
        }

        public function set_firstName($firstName){
            $this->$firstName = $firstName;
        }

        public function get_lastName(){
            return $this->$lastName;            
        }

        public function set_lastName($lastName){
            $this->$lastName = $lastName;
        }

        public function get_socialNumber(){
            return $this->$socialSecurityNumber;            
        }

        public function set_socialNumber($socialNumber){
            $this->$socialSecurityNumber = $socialNumber;
        }

        public function get_salary(){
            return $this->$salary;            
        }

        public function set_salary($salary){
            $this->$salary = $salary;
        }

        public function get_job(){
            return $this->$job;            
        }

        public function set_job($job){
            $this->$job = $job;
        }

        function presentation(){
            echo "Bonjour, je suis ".$this->$firstName." ".$this->$lastName." mon numéro de sécu est : ".$this->$socialSecurityNumber." mon salaire est de : ".$this->$salary." et je travail en tant que ".$this->$job.".\n";
        }
    }
?>