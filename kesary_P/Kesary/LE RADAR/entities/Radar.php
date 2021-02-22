<?php
 
class Radar{

    private $_limitationVitesse;

    public function __construct(int $limitationVitesse){
        $this -> set_limitationVitesse($limitationVitesse)
    }

    public function get_limitationVitesse(){
        return $this -> _limitationVitesse;
    }

    public function set_limitationVitesse($limitationVitesse){
        $this -> _limitationVitesse = $limitationVitesse;

    }




    public function flasherVoiture(){
        
    }
}

?>


