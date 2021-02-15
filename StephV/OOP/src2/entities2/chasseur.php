<?php
class Chasseur extends Humain{

    private string $arme;

    public function __construct($arme, $nom){
        Parent::__construct($nom);
        $this->arme=$arme;
    }
    public function seDeplacerAvecSonFusil(string $arme,string $nom){
        echo self::$nom." se déplace avec son ".$this->arme." à la main\n";
    }

    public function get_arme(){
        return $this->arme;
    }
    public function set_arme($arme){
        $this->arme=$arme;
    }
        
    public function chasser($lapin){
        echo self::$nom." tire sur le lapin ".$lapin->set_color." et ";
        $enVie=true;
        $shot=0;
        $shot=rand(1,6);
        if ($shot=1 || $shot=6){
            $enVie=false;
            echo "le tue\n"; 
            exit;
        }else{
            echo "rate son tir et le lapin d'enfuie.\n";
            
        }
    }
}

?>