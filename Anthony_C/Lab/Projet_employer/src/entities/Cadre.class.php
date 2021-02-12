<?php
    class Cadre extends Employe{
        private $_employeToManage;

        public function __construct(string $firstName,string $lastName,int $socialNumber,float $salary,string $job){
            parent :: __construct($firstName,$lastName,$socialNumber,$salary,$job);
        }

        public function get_employeToManage(){
            return $this->_employeToManage;
        }

        public function set_employeToManage(array $employeToManage){
            $this->_employeToManage=$employeToManage;
        }

        public function presentation(){
            echo "Bonjour, je suis ".$this->_firstName." ".$this->_lastName.", je suis un cadre. Mon numéro de sécu est : ".$this->_socialSecurityNumber." mon salaire est de : ".$this->_salary." et je travail en tant que ".$this->_job.".\nJe manage : ".$this->_employeToManage[0]->get_firstName()." ".$this->_employeToManage[0]->get_lastName()." et ".$this->_employeToManage[1]->get_firstName()." ".$this->_employeToManage[1]->get_lastName().".\n\n";
        }

        public function augmentation(){
            echo "Le cadre augmente ".$this->_employeToManage[0]->get_firstName()." ".$this->_employeToManage[0]->get_lastName()." de 10% et ".$this->_employeToManage[1]->get_firstName()." ".$this->_employeToManage[1]->get_lastName()." de 20%.\n";
            $this->_employeToManage[0]->set_salary($this->_employeToManage[0]->get_salary()+($this->_employeToManage[0]->get_salary()*10/100));
            $this->_employeToManage[1]->set_salary($this->_employeToManage[1]->get_salary()+($this->_employeToManage[1]->get_salary()*10/100));
            echo "Le salaire de ".$this->_employeToManage[0]->get_firstName()." ".$this->_employeToManage[0]->get_lastName()." est maintenant de ".$this->_employeToManage[0]->get_salary()."€.:\n";
            echo "Le salaire de ".$this->_employeToManage[1]->get_firstName()." ".$this->_employeToManage[1]->get_lastName()." est maintenant de ".$this->_employeToManage[1]->get_salary()."€.\n";
        }
    }
?>