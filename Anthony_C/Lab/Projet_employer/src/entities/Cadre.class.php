<?php
    class Cadre implements Employe{
        private $employeToManage;

        public function __construct($firstName,$lastName,$socialNumber,$salary,$job){
            parent :: __construct($firstName,$lastName,$socialNumber,$salary,$job);
        }

        public function get_employeToManage(){
            return $this->$employeToManage;
        }

        public function set_employeToManage(array $employeToManage){
            $this->$employeToManage=$employeToManage;
        }

        public function presentation(){
            echo "Bonjour, je suis ".$this->$firstName." ".$this->$lastName.", je suis un cadre. Mon numéro de sécu est : ".$this->$socialSecurityNumber." mon salaire est de : ".$this->$salary." et je travail en tant que ".$this->$job.".\nJe manage : .".$this->$employeToManage[0]->get_firstName." ".$this->$employeToManage[0]->get_lastName." et ".$this->$employeToManage[1]->get_firstName." ".$this->$employeToManage[1]->get_lastName.".";
        }

        public function augmentation(){
            echo "Le cadre augmente ".$this->employeToManage[0]->get_firstName." ".$this->employeToManage[0]->get_lastName." de 10% et ".$this->employeToManage[1]->get_firstName." ".$this->employeToManage[1]->get_lastName." de 20%.\n";
            $this->employeToManage[0]->set_salary($this->employeToManage[0]->get_salary*10/100);
            $this->employeToManage[1]->set_salary($this->employeToManage[1]->get_salary*20/100);
            echo "Le salaire de ".$this->employeToManage[0]->get_firstName." ".$this->employeToManage[0]->get_lastName." est maintenant de ".$this->employeToManage[0]->get_salary."€.";
            echo "Le salaire de ".$this->employeToManage[1]->get_firstName." ".$this->employeToManage[1]->get_lastName." est maintenant de ".$this->employeToManage[1]->get_salary."€.";
        }
    }
?>